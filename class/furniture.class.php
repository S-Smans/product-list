<?php

class Furniture extends productType
{
    function setType() {
        $sku = $_POST["sku"];
        $name = $_POST["name"];
        $price = $_POST["price"];
        $productType = $_POST["productType"];
        echo $sku . "<br>" . $name . "<br>" . $price . "<br>" . $productType . "<br>";
    }
}