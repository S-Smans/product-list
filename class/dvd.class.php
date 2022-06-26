<?php

class Dvd extends productType
{
  private $errors = [];

  public function validateType($data)
  {
    // removes white space
    $size = trim($data['size']);

    if (empty($size)) {
      $this->addError('size', 'Size cannot be empty');
    } elseif (!preg_match('/^[0-9]{1,12}$/', $size)) {
      $this->addError('size', 'Size must be 1-12 chars & numeric');
    }

    return $this->errors;
  }

  public function setType()
  {
    $sku = $_POST["sku"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $value = $_POST["size"];
    $productType = $_POST["type"];

    $this->createProduct($sku, $name, $price, $value, $productType);
  }

  private function addError($key, $value)
  {
    $this->errors[$key] = $value;
  }
  
}
