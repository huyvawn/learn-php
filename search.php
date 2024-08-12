<?php
// 1 . Get parameter
    $name = $_GET["q"];
// 2. Connect db
$host="localhost";
$user ="root";
$pass="root";
$db="test-db";
$conn= new mysqli($host,$user,$pass,$db);
if($conn->error){
    die("Connect refused!");
}
// 3. query db by parameter
$sql = "select * from products where name LIKE '%$name%'";
$result= $conn->query($sql);
// 4. convert data to array
$products =[];
while($row = $result->fetch_assoc()){
    $products[]=$row;
}
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
    <a href="#" class="btn btn-primary">Buy</a>
  </div>
</div>
                </div>
                <?php endforeach; ?>
            </div>
    </div>
</main>
</body>
</html>