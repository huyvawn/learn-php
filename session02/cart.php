<?php 
require_once("functions/db.php");
require_once("functions/cartfunction.php");
session_start();
$cart = isset($_SESSION["cart"])?$_SESSION["cart"]:[];
// foreach($cart as $key=>$item){
//     echo"ID=$key -- buy_qty=$item<br/>";
    
// }
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once("htmlsess2/head.php");
?>
<body>
    <?php $items= getCartItems(); ?>
<?php
include_once("htmlsess2/nav.php")    ;
?>
<div class="container mt-4">
    <div class="row">
    <div class="col-8">
        <?php $total= 0; ?>
<?php foreach($items as $product) : {
    // $sql= "select * from products where id=$key";
    // $product= findById($sql);
}?>
    <div class="row product-row mt-2">
        <div class="col-3">
            <img src="<?php echo $product["thumbnail"];?>" alt="productImg">
        </div>
        <div class="col-3">
        <h4><?php echo $product["name"]; ?></h4>
        </div>
        <div class="col-3">
            <p>Price: <?php echo $product["price"];?></p>
        </div>
        <div class="col-3">
        <p>Quantity: <?php echo $product["buy_qty"]; ; ?></p>
        <p>In stock: <?php echo $product["in_stock"]; ?></p>
        <?php $total += $product["price"] * $product["buy_qty"]; ?>
        </div>
    </div>
<?php endforeach; ?>
</div>
<div class="col checkout-container">
<div class="checkout-section ">
    <div class="row mb-2">
        <h4>Your total amount: $<?php echo $total; ?></h4>
    </div>
    <div class="row">
        <div class="col">
    <a href="checkout.php" class="btn btn-primary">Go to checkout</a>
        </div>
        <div class="col">
    <a href="session2.php" class="btn btn-danger">Back to Shopping</a>
        </div>
    </div>
</div>
</div>
</div>
</div>
</body>
</html>