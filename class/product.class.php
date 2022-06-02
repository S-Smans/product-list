<?php

class Product extends Dbh
{

	protected function getProduct()
	{
		$sql = "SELECT SKU, Name, Price, Value, Type FROM products";
		$stmt = $this->connect()->query($sql);
		return $stmt->fetchAll();
	}
}
