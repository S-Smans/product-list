<?php
include './autoload.inc.php';
ini_set('display_errors', 1);

// Loads all the products from the database
$product = new ProductView();
$product->showProduct();