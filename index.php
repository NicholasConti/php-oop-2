<!DOCTYPE html>
<?php
include_once __DIR__ . '/Models/Category.php';
include_once __DIR__ . '/Models/Products.php';
//include all products
require_once __DIR__ . '/Models/Partials/Accessories.php';
require_once __DIR__ . '/Models/Partials/Food.php';
require_once __DIR__ . '/Models/Partials/Toys.php';

//create animal categories
$cat = new Category('cat');
$dog = new Category('dog');
$bird = new Category('bird');
$fish = new Category('fish');

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolshop</title>
</head>

<body>

</body>

</html>