<?php
require('database/DBController.php');
require('database/Product.php');
require('database/Cart.php');
$db = new DBController();
$product = new Product($db);
$Cart = new Cart($db);

$arr = array(
    "user_id" => 1,
    "item_id" =>2
);
$Cart->insertIntoCart($arr);