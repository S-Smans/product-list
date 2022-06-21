<?php
include './autoload.inc.php';
include_once "../abstract/productType.abstract.php";
// http://localhost/product-list/includes/createProduct.inc.php

if (isset($_POST["submit"])) {
    $productType = $_POST["productType"];
    // Create a object from the selected product type
    $type = new $productType();
    $createProduct = new createProduct();
    $createProduct->create($type);
}

class createProduct
{
    public function create(productType $productType)
    {
        $productType->setType();
    }
}


// Recieve the user selected type
// For each type format the type values
// send them to the database