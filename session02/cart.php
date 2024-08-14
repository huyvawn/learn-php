<?php 
session_start();
$cart = isset($_SESSION["cart"])?$_SESSION["cart"]:[];
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once("htmlsess2/head.php");
?>
<body>
<?php
include_once("htmlsess2/nav.php")    ;
?>

</body>
</html>