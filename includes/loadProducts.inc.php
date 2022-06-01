<?php
include './autoload.inc.php';
ini_set('display_errors', 1);

$product = new ProductView();
$product->showProduct();