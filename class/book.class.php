<?php

class Book extends productType
{
  private $errors = [];

  public function validateType($data)
  {
    // removes white space
    $weight = trim($data['weight']);

    if (empty($weight)) {
      $this->addError('weight', 'Weight cannot be empty');
    } else if (!preg_match('/^[0-9]{1,12}$/', $weight)) {
      $this->addError('weight', 'Weight must be 1-12 chars & numeric');
    }

    return $this->errors;
  }

  private function addError($key, $value)
  {
    $this->errors[$key] = $value;
  }
}
