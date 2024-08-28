<?php
require_once("functions/db.php");
$full_name=$_POST["full_name"];
$email=$_POST["email"];
$password=$_POST["password"];
// echo $full_name;
$password=password_hash($password,PASSWORD_BCRYPT);
$sql="insert into users(fullname,email,password)
                    values('$full_name','$email','$password')";
                    // echo $sql;
insert($sql);
header("Location: /session02/login.php");