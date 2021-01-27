<?php

//Required MySQL Connection
require('database/DBController.php');

//Required Product Class
require('database/Product.php');

//Required Product Class
require('database/Cart.php');

//DBController object
$db = new DBController();

//Product object
$product = new Product($db);
$product_shuffle = $product->getData();

//Cart object
$Cart = new Cart($db);

?>