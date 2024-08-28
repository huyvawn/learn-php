<?php
require_once("../functions/db.php");
$sql="select * from products;";
$products=select($sql);
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once("../htmlsess2/head.php"); ?>
<body>
<?php include_once("../htmlsess2/nav.php"); ?>

</body>
</html>