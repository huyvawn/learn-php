<?php 
// cập nhật trạng thái thành đã trả tiền
require_once("functions/db.php");
$order_id=$_GET["order_id"];
$sql="update orders set paid = 1 where id = $order_id;";
$conn=connect();
$conn->query($sql);

// chuyển về trang thank you
header("Location: thankyou.php?order_id=$order_id");
?>

<!-- <h1>Payment Successful!</h1>
<h4>Here is your order's information:</h4> -->
