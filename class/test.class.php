<?php

class Test extends Dbh {

	public function getUsers() {
		$sql = "SELECT * FROM products";
		$stmt = $this->connect()->query($sql);
		while($row = $stmt->fetch()) {
			echo $row['SKU'] . '<br>';
		}
	}

	public function getUsersStmt($sku, $name) {
		$sql = "SELECT * FROM products WHERE SKU = ? AND Name = ? ";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$sku, $name]);
		$names = $stmt->fetchAll();
		
		foreach ($names as $name) {
			echo $name['Attribute'] . '<br>';
		}
	}

	public function setUsersStmt($sku, $name, $price, $attribute) {
		$sql = "INSERT INTO products(SKU, Name, Price, Attribute) VALUES (?, ?, ?, ?)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$sku, $name, $price, $attribute]);
	}
}