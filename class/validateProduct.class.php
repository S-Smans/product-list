<?php
class validateProduct
{

  private $data;
  private $errors = [];
  private static $fields = ['sku', 'name', 'price', 'productType'];

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
    $val = trim($this->data['sku']);

    if (empty($val)) {
      $this->addError('sku', 'SKU cannot be empty');
    } else if (!preg_match('/^[a-zA-Z0-9]{6,12}$/', $val)) {
      $this->addError('sku', 'SKU must be 6-12 chars & alphanumeric');
    }
  }

  private function validateName()
  {
    // removes white space
    $val = trim($this->data['name']);

    if (empty($val)) {
      $this->addError('name', 'Name cannot be empty');
    } else if (!preg_match('/^[a-zA-Z0-9]{1,50}$/', $val)) {
      $this->addError('name', 'Name must be 1-50 chars & alphanumeric');
    }
  }

  private function validatePrice()
  {
    // removes white space
    $val = trim($this->data['price']);

    if (empty($val)) {
      $this->addError('price', 'Price cannot be empty');
    } else if (!preg_match('/^[0-9]{1,12}$/', $val)) {
      $this->addError('price', 'Price must be 1-12 chars & numeric');
    }
  }

  private function validateProductType()
  {
    $typeError = $this->type->validateType($this->data);
    $this->addError($typeError[0], $typeError[1]);
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
