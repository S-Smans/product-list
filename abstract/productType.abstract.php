<?php

abstract class productType extends ProductContr
{
  public function setType()
  {
    $sku = $_POST["sku"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $value = $_POST["size"];
    $productType = $_POST["productType"];

    $this->createProduct($sku, $name, $price, $value, $productType);
  }

  abstract public function validateType($data);
}
