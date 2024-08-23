<?php 
require_once("functions/db.php");
$sql_getorders="select * from orders";
$orders=select($sql_getorders);
$ord_id=$_GET["order_id"];
$sql_getord_item="select * from orderitems where order_id=$ord_id;";
    $orditems=select($sql_getord_item);
    $ids1=[];
    foreach($orditems as $a){
        $ids1[]=$a["product_id"];
    }
    $ids1=implode(",",$ids1);
    $sql_getproduct1="select * from products where id in ($ids1);";
    $products1= select($sql_getproduct1);
?>

<!DOCTYPE html>
<html lang="en">
<?php include_once("htmlsess2/head.php"); ?>
<body>
<?php foreach($products1 as $product):{
    $product_id=$product["id"];
    $sql_orderitemrecord="select * from orderitems where product_id=$product_id and order_id=$ord_id;";
    $orderitemrecord= findById($sql_orderitemrecord);
    $product["buy_qty"]=$orderitemrecord["buy_qty"];
}?>
    <div class="row product-row mt-2">
        <div class="col-3">
            <img src="<?php echo $product["thumbnail"];?>" alt="productImg">
        </div>
        <div class="col-3">
        <h4><?php echo $product["name"]; ?></h4>
        </div>
        <div class="col-3">
            <p>Price: <?php echo $orderitemrecord["price"];?></p>
        </div>
        <div class="col-3">
        <p>Quantity: <?php echo $product["buy_qty"]; ; ?></p>
        </div>
    </div>
<?php endforeach; ?>
<?php include_once("htmlsess2/nav.php"); ?>
<h4 class="mt-3 mb-3">
    Details of each orders:
</h4>
<?php foreach ($orders as $order):{
    $order_id=$order["id"];
    $sql_getorderitems="select * from orderitems where order_id=$order_id;";
    $orderitems=select($sql_getorderitems);
    $ids=[];
    foreach($orderitems as $orderitemsrecord){
        $ids[]=$orderitemsrecord["product_id"];
    }
    $ids=implode(",",$ids);
    $sql_getproduct="select * from products where id in ($ids);";
    $products= select($sql_getproduct);
} ?>
<div class="order">
    <div class="row order-info">
<div class="col"> Order ID: <?php echo $order["id"];?></div>
<div class="col">Customer's name: <?php echo $order["customer_name"];?></div>
<div class="col">Ship Address: <?php echo $order["shipping_address"];?></div>
<div class="col">telephone: <?php echo $order["telephone"];?></div>
</div>
<?php foreach($products as $product):{
    $product_id=$product["id"];
    $sql_orderitemrecord="select * from orderitems where product_id=$product_id and order_id=$order_id;";
    $orderitemrecord= findById($sql_orderitemrecord);
    $product["buy_qty"]=$orderitemrecord["buy_qty"];
}?>
    <div class="row product-row mt-2">
        <div class="col-3">
            <img src="<?php echo $product["thumbnail"];?>" alt="productImg">
        </div>
        <div class="col-3">
        <h4><?php echo $product["name"]; ?></h4>
        </div>
        <div class="col-3">
            <p>Price: <?php echo $orderitemrecord["price"];?></p>
        </div>
        <div class="col-3">
        <p>Quantity: <?php echo $product["buy_qty"]; ; ?></p>
        </div>
    </div>
<?php endforeach; ?>
<p>Total: <?php echo $order["grand_total"];?></p>
</div>
<?php endforeach; ?>
</body>
</html>