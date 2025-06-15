
<main role="main" class="container">
<h1>Create User</h1>
<br>

<div class="row">
    <div class="col-sm-auto">
    <form action="/login/verify" method="post" >
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
  </div>
</div>
    <?php require_once 'app/views/templates/footer.php' ?>
