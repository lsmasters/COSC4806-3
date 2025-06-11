<?php //require_once 'app/views/templates/headerPublic.php'
	if(isset($_SESSION['failedAuth'])) { 
		echo "This is unsuccessful login attempt # " . $_SESSION['failedAuth']; 
		echo '<p style="color:red">PLEASE TRY AGAIN!  </p>';
	}
	else{
		echo '<p>Please login to continue. </p>';
  }
  
?>
<main role="main" class="container">
<h1>Welcome to Assigment 3</h1>
<br>

<div class="row">
    <div class="col-sm-auto">
		<form action="/login/verify" method="post" >
		<fieldset>
			<div class="form-group">
				<label for="username">Username</label>
				<input required type="text" class="form-control" name="username" autofocus>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input required type="password" class="form-control" name="password">
			</div>
            <br>
		    <button type="submit" class="btn btn-primary">Login</button>
		</fieldset>
		</form> 
		<p>  <a href='/create_user.php'><br><br>Click here to CREATE a new account </a></p>
	</div>
</div>
    <?php require_once 'app/views/templates/footer.php' ?>
