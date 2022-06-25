<?php
require_once "./autoload.inc.php";
require_once "../abstract/productType.abstract.php";

if (isset($_POST['submit'])) {
  $validator = new ValidateProduct($_POST, new $_POST['type']()); 
   $errors = $validator->validateForm();
   echo json_encode($errors);
}