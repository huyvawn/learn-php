<?php
$menu=[
    "Bun",
    "Pho",
    "Com",
    "Ca"
];
$sv=[
    "name"=>"Nguyen Van An",
    "age"=> 19,
    "tel"=>"0987432141"
];
$list_sv=[
    [
        "name"=>"Do Viet Anh",
        "age"=>18,
        "tel"=>"09538225"
    ],
    [
        "name"=>"Nguyen Minh Duc",
        "age"=>20,
        "tel"=>"095252854"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>Today's menu</H1>
    <ul>
        <?php foreach ($menu as $item) : ?>
            <li> <?php echo $item; ?></li>
       <?php endforeach;  ?>
        
    </ul>
    <h2>Student's Info</h2>
    <h3><?php echo $sv['name']; ?></h3>
    <h3><?php echo $sv['age']; ?></h3>
    <h3><?php echo $sv['tel']; ?></h3>

    <?php foreach($list_sv as $s): ?>
        <div>
            <h3><?php echo $s['name']; ?></h3>
            <h3><?php echo $s['age']; ?></h3>
            <h3><?php echo $s['tel']; ?></h3>
        </div>
        <?php endforeach; ?>
</body>
</html>