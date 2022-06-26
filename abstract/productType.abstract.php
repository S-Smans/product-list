<?php

abstract class productType extends ProductContr
{
  abstract public function setType();

  abstract public function validateType($data);
}
