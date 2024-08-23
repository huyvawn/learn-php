<?php
require_once("functions/db.php");
$sql="select * from orders";
$orders= select($sql);
?>

<!DOCTYPE html>
<html lang="en">
<?php include_once("htmlsess2/head.php"); ?>
<body>
<?php include_once("htmlsess2/nav.php"); ?>
<h3 class="mt-3 mb-3">List of Orders</h3>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">created_at</th>
            <th scope="col">grand_total</th>
            <th scope="col">paid</th>
            <th scope="col">Payment method</th>
            <th scope="col">Shipping address </th>
            <th scope="col">Telephone </th>
            <th scope="col">Customer Name </th>
            <th scope="col">User ID</th>
            <th scope="col">Email</th>
            <th scope="col">Further Details</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($orders as $order): ?>
            <tr>
                <th scope="row"><?php echo $order["id"]; ?></th>
                <td><?php echo $order["created_at"];?></td>
                <td><?php echo $order["grand_total"]; ?></td>
                <td><?php echo $order["paid"]; ?></td>
                <td><?php echo $order["payment_method"]; ?></td>
                <td><?php echo $order["shipping_address"]; ?></td>
                <td><?php echo $order["telephone"]; ?></td>
                <td><?php echo $order["customer_name"]; ?></td>
                <td><?php echo $order["user_id"]; ?></td>
                <td><?php echo $order["email"]; ?></td>
                <td><a href="orderdetails.php?order_id=<?php echo $order["id"];?>">Details</a></td>
            </tr>
            <?php endforeach ; ?>
    </tbody>
</table>
</body>
</html>