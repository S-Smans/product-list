<?php
class ValidateProduct extends ProductView
{

  private $data;
  private $errors = [];
  private static $fields = ['sku', 'name', 'price', 'type'];

  public function __construct($post_data, $type)
  {
    $this->data = $post_data;
    $this->type = $type;
  }

  public function validateForm()
  {
    foreach (self::$fields as $field) {
      if (!array_key_exists($field, $this->data)) {
        trigger_error("$field is not present in data");
        return;
      }
    }

    $this->validateSKU();
    $this->validateName();
    $this->validatePrice();
    $this->validateProductType();
    return $this->errors;
  }

  private function validateSKU()
  {
    // removes white space
    $sku = trim($this->data['sku']);

    if (empty($sku)) {
      $this->addError('sku', 'SKU cannot be empty');
    } elseif (!preg_match('/^[a-zA-Z0-9]{6,12}$/', $sku)) {
      $this->addError('sku', 'SKU must be 6-12 chars & alphanumeric');
    } elseif ($this->showSKU($sku)) {
      $this->addError('sku', 'SKU already exists');
    }
  }

  private function validateName()
  {
    // removes white space
    $name = trim($this->data['name']);

    if (empty($name)) {
      $this->addError('name', 'Name cannot be empty');
    } elseif (!preg_match('/^[a-zA-Z0-9 ]{1,50}$/', $name)) {
      $this->addError('name', 'Name must be 1-50 chars & alphanumeric');
    }
  }

  private function validatePrice()
  {
    // removes white space
    $price = trim($this->data['price']);

    if (empty($price)) {
      $this->addError('price', 'Price cannot be empty');
    } elseif (!preg_match('/^[0-9]{1,12}$/', $price)) {
      $this->addError('price', 'Price must be 1-12 chars & numeric');
    }
  }

  private function validateProductType()
  {
    $typeError = $this->type->validateType($this->data);
    foreach ($typeError as $key => $value) {
      $this->addError($key, $value);;
    }
  }

  private function addError($key, $value)
  {
    $this->errors[$key] = $value;
  }

  // public function create(productType $productType)
  // {
  //   $productType->setType();
  // }
}
