<?php

class Dvd extends productType
{
  public function validateType($data)
  {
    // removes white space
    $val = trim($data['size']);

    if (empty($val)) {
      return ['dvd', 'Size cannot be empty'];
    } else {
      if (!preg_match('/^[0-9]{1,12}$/', $val)) {
        return ['dvd', 'Size must be 1-12 chars & numeric'];
      }
    }
  }
}
