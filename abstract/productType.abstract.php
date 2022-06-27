<?php

abstract class ProductType extends ProductContr
{
  abstract public function setType();

  abstract public function validateType($data);
}
