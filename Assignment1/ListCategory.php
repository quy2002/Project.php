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
$listCategory = [];
$listCategory[] = [
    "id" => 1,
    "category" => "Giày",
    "quantity" => 5
];
$listCategory[] = [
    "id" => 2,
    "category" => "Đồng hồ thông minh",
    "quantity" => 5
];
$listCategory[] = [
    "id" => 3,
    "category" => "Kính mắt",
    "quantity" => 5
];

?>
<h1 class="text-primary">List category</h1>
<div class="btn-add-new">
    <button onclick="location.href='AddCategory.php'" class="btn btn-success btn-lg">Add new category</button>
</div>
<table class="table table-striped table-bordered">
    <thead>
    <th>ID</th>
    <th>Category name</th>
    <th>Quantity</th>
    <th class="thead-button"></th>
    </thead>
    <tbody>
    <?php foreach ($listCategory as $item) {?>
        <tr>
            <td><?php echo $item["id"] ?></td>
            <td><?php echo $item["category"] ?></td>
            <td><?php echo $item["quantity"] ?></td>
            <td class="item-button">
                <button onclick="location.href='EditCategory.php'" type="button" class="btn btn-primary btn-lg">Edit</button>
                <button onclick="location.href='table1.php'" type="button" class="btn btn-success btn-lg">View</button>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>