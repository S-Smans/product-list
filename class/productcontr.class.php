<?php

class ProductContr extends Product
{

    public function createProduct($sku, $name, $price, $value, $type)
    {
        $this->setProduct($sku, $name, $price, $value, $type);
    }

    public function removeProducts($productsId) {
        $this->deleteProducts($productsId);
    }
}
