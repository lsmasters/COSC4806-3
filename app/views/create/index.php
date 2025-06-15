
<main role="main" class="container">
<h1>Create User</h1>
<br>

<div class="row">
    <div class="col-sm-auto">
    <form action="/create/check" method="post" >
    <fieldset>
      <br>
      <div class="form-group">
        <label for="username">Username</label>
        <input required type="text" class="form-control" name="username" autofocus>
      </div>
      <br>
      <div class="form-group">
        <label for="password">Password</label>
        <input required type="password" class="form-control" name="password">
      </div>
            <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </fieldset>
    </form> 
    <h2>  Username Requiremnts</h2>
    <p>    Usernames must be UNIQUE.</p>    
    <h2>  Password Requiremnts</h2>
    <p>    1. Minimum lenght:  8 characters</p>  
    <p>    2. Contains uppercase letter(s)</p>
    <p>    3. Contains lowercase letter(s)</p>
    <p>    4. Contains number(s)</p>
    <p>    5. Contains special character(s)(!@#$%)</p>  
  </div>
</div>
    <?php require_once 'app/views/templates/footer.php' ?>
