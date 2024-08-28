<?php
session_start();
require_once("functions/user.php");
if(currentUser()!= null){
    header("Location: /session02/session2.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("htmlsess2/head.php"); ?>
</head>
<body>
    <?php include_once("htmlsess2/nav.php"); ?>
    <div class="container">
        <h3 class='text-center'>Login</h3>
    <form action="/session02/post_login.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">I agree to the terms</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>