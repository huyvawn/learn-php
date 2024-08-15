<?php 
require_once("functions/db.php");
session_start();
$cart = isset($_SESSION["cart"])?$_SESSION["cart"]:[];
foreach($cart as $key=>$item){
    // echo"ID=$key -- buy_qty=$item<br/>";
    
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once("htmlsess2/head.php");
?>
<body>
<?php
include_once("htmlsess2/nav.php")    ;
?>
<?php foreach($cart as $key=>$item) : {
    $sql= "select * from products where id=$key";
    $product= findById($sql);
}?>
    <div class="row">
        <h4><?php echo $product["name"]; ?></h4>
        <p>Quantity: <?php echo $item; ?></p>
    </div>
<?php endforeach; ?>
</body>
</html>