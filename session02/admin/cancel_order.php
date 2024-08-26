<?php 
require_once("../functions/db.php");
$id=$_GET['id'];
$sql= "update orders set status=5 where id=$id";
update($sql);
header("Location: order_detail.php?id=$id");