<?php

class Book extends productType
{
  private $errors = [];

  public function setType()
  {
    $sku = $_POST["sku"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $value = $_POST["weight"];
    $productType = $_POST["type"];

    $this->createProduct($sku, $name, $price, $value, $productType);
  }

  public function validateType($data)
  {
    // removes white space
    $weight = trim($data['weight']);

    if (empty($weight)) {
      $this->addError('weight', 'Weight cannot be empty');
    } elseif (!preg_match('/^[0-9]{1,12}$/', $weight)) {
      $this->addError('weight', 'Weight must be 1-12 chars & numeric');
    }

    return $this->errors;
  }

  private function addError($key, $value)
  {
    $this->errors[$key] = $value;
  }
}
