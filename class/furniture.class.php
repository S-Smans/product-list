<?php

class Furniture extends productType
{
  private $errors = [];
  private $measurements = [];

  public function setType()
  {
    $sku = $_POST["sku"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $value = $_POST["height"] . "x" . $_POST["width"] . "x" . $_POST["length"];
    $productType = $_POST["type"];

    $this->createProduct($sku, $name, $price, $value, $productType);
  }

  public function validateType($data)
  {
    // Associative array for each measurement
    $this->addMeasurement('height', $data['height']);
    $this->addMeasurement('width', $data['width']);
    $this->addMeasurement('length', $data['length']);

    $this->validateMeasurements($this->measurements);

    return $this->errors;
  }

  private function validateMeasurements($measurements)
  { 
    foreach ($measurements as $key => $value) {
      
      // Checks the value. ucfirst capitalizes first letter
      if (empty($value)) {
        $this->addError($key, ucfirst($key . ' cannot be empty'));
      } elseif (!preg_match('/^[0-9]{1,12}$/', $value)) {
        $this->addError($key, ucfirst($key .' must be 1-12 chars & numeric'));
      }
    }
  }

  private function addError($key, $value)
  {
    $this->errors[$key] = $value;
  }

  private function addMeasurement($key, $value) {
    $this->measurements[$key] = $value;
  }
}
