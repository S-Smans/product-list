<?php

class Product extends Dbh
{

	protected function getProduct()
	{
		$sql = "SELECT SKU, Name, Price, Value, Type FROM products";
		$stmt = $this->connect()->query($sql);
		return $stmt->fetchAll();
	}

	protected function setProduct($sku, $name, $price, $value, $type)
	{
		$sql = "INSERT INTO products (SKU, Name, Price, Value, Type) VALUES (?,?,?,?,?)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$sku, $name, $price, $value, $type]);
	}
}
