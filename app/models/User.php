<?php

class User {

    public $username;
    public $password;
    public $auth = false;
    public $checked = false; //for new user
    public $usernameused = false;  //for new user
    public $pwmismatch = false;  //for new user

    public function __construct() {
        
    }
  
    public function get_all_users() {
      $db = db_connect();
      $sql =
      $stmt = $db->prepare( "SELECT * FROM users;");
      $stmt->execute();
      $rows = $stmt->fetchall(PDO::FETCH_ASSOC);
      return $rows;
    }
  
    public function test () {
      $db = db_connect();
      $statement = $db->prepare("select * from users;");
      $statement->execute();
      $rows = $statement->fetch(PDO::FETCH_ASSOC);
      return $rows;
    }

    public function authenticate($username, $password) {
        /*
         * if username and password good then
         * $this->auth = true;
         */
    		$username = strtolower($username);
    		$db = db_connect();
        $statement = $db->prepare("select * from users WHERE username = :name;");
        $statement->bindValue(':name', $username);
        $statement->execute();
        $rows = $statement->fetch(PDO::FETCH_ASSOC);
		
    		if (password_verify($password, $rows['password'])) {
      			$_SESSION['auth'] = 1;
      			$_SESSION['username'] = ucwords($username);
      			unset($_SESSION['failedAuth']);
      			header('Location: /home');
      			die;
    		} else {
      			 if(isset($_SESSION['failedAuth'])) {
      				    $_SESSION['failedAuth'] ++; //increment
      			 } else {
        				  $_SESSION['failedAuth'] = 1;
      			 }
    			  header('Location: /login');
      		  die;
    		}
      }  
    public function checknewuser($username, $password){
        $user = new User();
        $user_list = $user->get_all_users();  //get all db records
       
      //1.   check db for username...if included return to create_user with username flag set
        foreach ($user_list as $item){
            if ($username == $item['username']){
              $_SESSION['usernameUsed'] = 1;
              header ("Location: /create");
              die;
            }
        }
        $_SESSION['usernameUsed'] = 0;  //username is unique...continue
      
        //2.  check password for entry error
        if ($password !== $password2) {  //check for password entry match
            $_SESSION['pwmismatch'] = 1;
            header ("Location: /create");
            exit;
        } else {
            $_SESSION['pwmismatch'] = 0;//password match...so proceed
        }
    }
}
