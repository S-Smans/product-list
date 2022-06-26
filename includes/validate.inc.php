<?php
require_once "./autoload.inc.php";
require_once "../abstract/productType.abstract.php";

if (isset($_POST['submit'])) {
  $productType = new $_POST['type']();
  $validator = new ValidateProduct($_POST, $productType); 
   $errors = $validator->validateForm();
   if ($errors) {
     echo json_encode($errors);
   } else {
    $productType->setType();
   }
}