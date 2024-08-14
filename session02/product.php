<?php 
require_once("functions/db.php");
$id = $_GET["id"];
$sql= "select * from products where id=$id";
$product= findById($sql);
if($product == null){
    header("Location: 404notfound.php");
    die();
}
$catid= $product["category_id"];
$catquery = "select * from categories where id=$catid";
$category= findById($catquery);
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once("htmlsess2/head.php")
?>
<body>
    <?php include_once("./htmlsess2/nav.php")
    ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <img src="<?php echo $product["thumbnail"]; ?>" alt="product-picture">
        </div>
        <div class="col-5">
            <h4>Category: <?php echo$category["name"];?></h4>
            <h2><?php echo $product["name"]; ?></h2>
            <p><?php echo $product["description"];?></p>
            <p>Price:$<?php echo $product["price"]; ?></p>
            <p>Stock: <?php echo $product["qty"]; ?></p>
            <form method="post" action="./add_to_cart.php">
            <div class="input-group">
                <input type="hidden" name="id" value="<?php echo $product["id"];?>" >
                <input name="buy_qty" type="number" value="1" min="1" class="form-control">
                <button class="btn btn-primary" type="submit">Add to cart</button>
            </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>