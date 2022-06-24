<?php
require './autoload.inc.php';
require_once "../abstract/productType.abstract.php";
// http://localhost/product-list/includes/createProduct.inc.php

if (isset($_POST["submit"])) {
    $productType = $_POST["productType"];
    // Create a object from the selected product type
    $type = new $productType();
    $validateProduct = new validateProduct($_POST);
    $validateProduct->validateForm();
    //header('Location: http://localhost/product-list/');
}

class validateProduct
{

    private $data;
    private $errors = [];
    private static $fields = ['sku', 'name', 'price', 'productType'];

    public function __construct($post_data)
    {
        $this->data = $post_data;
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
        return $this->errors;

    }

    private function validateSKU()
    {
        // removes white space
        $val = trim($this->data['sku']);

        if (empty($val)) {
            $this->addError('sku', 'SKU cannot be empty');
        } else {
            if (!preg_match('/^[a-zA-Z0-9]{6,12}$/', $val)) {
                $this->addError('sku', 'SKU must be 6-12 chars & alphanumeric');
            }
        }
    }

    private function validateName()
    {
        // removes white space
        $val = trim($this->data['name']);

        if (empty($val)) {
            $this->addError('name', 'Name cannot be empty');
        } else {
            if (!preg_match('/^[a-zA-Z0-9]{6,12}$/', $val)) {
                $this->addError('name', 'Name must be 6-12 chars & alphanumeric');
            }
        }
    }

    private function validatePrice()
    {
        // removes white space
        $val = trim($this->data['price']);

        if (empty($val)) {
            $this->addError('price', 'Price cannot be empty');
        } else {
            if (!preg_match('/^[0-9]{1,12}$/', $val)) {
                $this->addError('price', 'Price must be numeric');
            }
        }
    }

    private function addError($key, $value)
    {
        $this->errors[$key] = $value;
    }

    public function create(productType $productType)
    {
        $productType->setType();
    }
}


// Recieve the user selected type
// For each type format the type values
// send them to the database