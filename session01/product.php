<?php
$products = [
    [
        "id"=>1,
        "name"=> "Iphone 15 Pro Max",
        "price"=> 1500,
        "description" => "The Iphone 15 is the latest generation of Iphone",
        "thumbnail"=>"https://cdn.dummyjson.com/products/images/mobile-accessories/Apple%20iPhone%20Charger/1.png",
    ],
    [
        "id"=>2,
        "name"=>"Iphone X",
        "price" => 899,
        "description" => "The Apple iPhone Charger is a high-quality charger designed for fast and efficient charging of your iPhone. Ensure your device stays powered up and ready to go.",
        "thumbnail" => "https://cdn.dummyjson.com/products/images/smartphones/iPhone%20X/1.png"
    ],
    [
        "id" => 3,
        "name"=> "Iphone 13 pro",
        "price"=> 1099,
        "description"=>"The iPhone 13 Pro is a cutting-edge smartphone with a powerful camera system, high-performance chip, and stunning display. It offers advanced features for users who demand top-notch technology.",
        "thumbnail"=> "https://cdn.dummyjson.com/products/images/smartphones/iPhone%2013%20Pro/1.png"
    ],
    [
        "id"=>4,
        "name" =>"Iphone 6",
        "price"=>299,
        "description"=> "The iPhone 6 is a stylish and capable smartphone with a larger display and improved performance. It introduced new features and design elements, making it a popular choice in its time.",
        "thumbnail"=>"https://cdn.dummyjson.com/products/images/smartphones/iPhone%206/1.png"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style-products.css">
    <title>Document</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    </header>
    <div class='container'>
    <h1 class='marginbot-30'> Our Products</h1>
<div class='row'>
    <?php foreach ($products as $item): ?>
        
<div class="card marginbot-30" style="width: 18rem;">
  <img src="<?php echo $item['thumbnail']; ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h6 class="row">Id: <?php echo $item['id']; ?></h6>
    <h5 class="card-title"><?php echo $item['name']; ?></h5>
    <p class="card-text"><?php echo substr($item['description'],0,70);?>..</p>
    <h5>Price: $<?php echo $item['price']; ?></h5>
    <a href="#" class="btn btn-primary">Buy</a>
  </div>
</div>

<?php endforeach; ?>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>