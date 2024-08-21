<?php 
require_once("functions/db.php");
$order_id= $_GET["order_id"];
$getproduct_id= "select * from orderitems where order_id = $order_id";
$product_ids=select($getproduct_id);
foreach($product_ids as $record){
    $ids[]=$record["product_id"];
}
$ids=implode(",",$ids);
echo $ids; die("");
$getproduct= "select * from products where id in ($ids)";
$products= select($getproduct);
echo $products;
?>

<!DOCTYPE html>
<html lang="en">
<?php include_once("htmlsess2/head.php"); ?>
<body>
    <?php include_once("htmlsess2/nav.php"); ?>
    <h2>Thank you for your purchase</h2>
    <h3>Here is the information of your order:</h3>
</body>
</html>