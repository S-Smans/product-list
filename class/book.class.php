<?php

class Book extends productType
{
    // send data about book attribute and type to Productcontr
    function setType() {
        $sku = $_POST["sku"];
        $name = $_POST["name"];
        $price = $_POST["price"];
        $productType = $_POST["productType"];
        echo $sku . "<br>" . $name . "<br>" . $price . "<br>" . $productType . "<br>";
    }
}