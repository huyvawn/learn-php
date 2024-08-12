<!DOCTYPE html>
<html lang="en">
<?php include_once("head.php");?>
<body>
    <?php include_once("nav.php");?>
    <main>
                <?php 
                    $sql = "select * from products";
                    $result = $conn->query($sql);
                    $products = [];
                    while ($row = $result->fetch_assoc()){
                        $products[]= $row;
                    }
                    ?>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>