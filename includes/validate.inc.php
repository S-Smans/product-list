<?php
require_once "./autoload.inc.php";
require_once "../abstract/productType.abstract.php";

if (isset($_POST['submit'])) {
  // creates an object from user selected Type Switcher
  $productType = new $_POST['type']();

  // creates an object that checks for errors
  $validator = new ValidateProduct($_POST, $productType); 

  // Retrieves any errors, if any, and displays them to the user, otherwise creates new product
   $errors = $validator->validateForm();
   if ($errors) {
    // Sends errors to Javascript for display
     echo json_encode($errors);
   } else {
    // Creates product
    $productType->setType();
   }
}