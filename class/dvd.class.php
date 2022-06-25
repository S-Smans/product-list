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
    } else if (!preg_match('/^[0-9]{1,12}$/', $size)) {
      $this->addError('size', 'Size must be 1-12 chars & numeric');
    }

    return $this->errors;
  }

  private function addError($key, $value)
  {
    $this->errors[$key] = $value;
  }
}
