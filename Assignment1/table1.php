<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/ListTable.css"/>
</head>
<body>

<?php

$category = [];
$category[] = [
    "id"=>1,
    "name"=>"Giày Adidas",
    "price"=>1500
];
$category[] = [
    "id"=>2,
    "name"=>"Giày nike",
    "price"=>1500
];
$category[] = [
    "id"=>2,
    "name"=>"Giày Vans",
    "price"=>1500
];
$category[] = [
    "id"=>2,
    "name"=>"Giày Converse",
    "price"=>1500
];
$category[] = [
    "id"=>2,
    "name"=>"Giày Ro",
    "price"=>1500
];

?>

<h1 class="text-primary">Table category</h1>
<div class="btn-add-new">
    <button onclick="location.href='AddProduct.php'" class="btn btn-success btn-lg">Add new product</button>
</div>

<table class="table table-striped table-bordered">
    <thead>
    <th>ID</th>
    <th>Name</th>
    <th>Price</th>
    <th class="thead-button"></th>
    </thead>
    <tbody>
    <?php foreach ($category as $item) {?>
        <tr>
            <td><?php echo $item["id"] ?></td>
            <td><?php echo $item["name"] ?></td>
            <td><?php echo $item["price"] ?></td>
            <td class="item-button">
                <button onclick="location.href='EditProduct.php'" type="button" class="btn btn-primary btn-lg">Edit</button>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<div class="btn-add-new">
    <button onclick="location.href='ListCategory.php'" class="btn btn-default btn-lg">Close</button>
</div>

</body>
</html>