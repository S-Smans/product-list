<?php

class Product extends Dbh
{

	protected function getProduct()
	{
		$sql = "SELECT * FROM products";
		$stmt = $this->connect()->query($sql);
		return $stmt->fetchAll();
	}
}
