<?php
require_once("../functions/order.php");
$order_id=$_GET["id"];
$new_status=CONFIRM;
update_status($order_id,$new_status);
header("Location: order_detail.php?id=$order_id");