<?php
require_once("./functions/db.php");
// 1 . Get parameter
    $id = $_GET["id"];
// 2. Connect db

// 3. query db by parameter
$sql = "select * from products where category_id=$id";
$products=select($sql);
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once("htmlsess2/head.php");?>
<body>
<?php include_once("htmlsess2/nav.php");?>
<main>
    <div class="container">
    <div class="row">
                <?php foreach($products as $item):  ?>
                <div class="col-3">
                <div class="card mb-3 mt-3">
  <img src="<?php echo $item["thumbnail"]; ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $item["name"] ; ?></h5>
    <p>Price: $<?php echo $item["price"];?></p>
    <p class="card-text"><?php echo substr($item["description"],0,1000); ?></p>
    <a href="product.php?id=<?php echo $item["id"];?>" class="btn btn-primary">Buy</a>
  </div>
</div>
                </div>
                <?php endforeach; ?>
            </div>
    </div>
</main>
</body>
</html>