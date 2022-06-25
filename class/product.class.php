<?php

class Product extends Dbh
{

	protected function getProduct()
	{
		$sql = "SELECT SKU, Name, Price, Value, Type FROM products";
		$stmt = $this->connect()->query($sql);
		return $stmt->fetchAll();
	}

	protected function getSKU($sku)
	{
		$sql = "SELECT SKU FROM products WHERE SKU = ( ?)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->bindParam(1, $sku, PDO::PARAM_STR);
		$stmt->execute();
		return $stmt->fetch();
	}	

	protected function setProduct($sku, $name, $price, $value, $type)
	{
		$sql = "INSERT INTO products (SKU, Name, Price, Value, Type) VALUES (?,?,?,?,?)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$sku, $name, $price, $value, $type]);
	}
}
