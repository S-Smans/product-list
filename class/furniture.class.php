<?php

class Furniture extends productType
{
    public function setType()
    {
        $sku = $_POST["sku"];
        $name = $_POST["name"];
        $price = $_POST["price"];
        $value = $_POST["height"] . 'x' . $_POST["width"] . 'x' . $_POST["length"];
        $productType = $_POST["productType"];

        $this->createProduct($sku, $name, $price, $value, $productType);
    }
}
