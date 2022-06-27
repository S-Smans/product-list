<?php

class Dbh
{
	private $host = "localhost";
	private $user = "id18818899_sandis";
	private $pass = "*dPID+l~]fVO)2cW";
	private $name = "id18818899_product_list";

	protected function connect()
	{
		$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->name;
		$pdo = new PDO($dsn, $this->user, $this->pass);
		// Adds an default fetch attribute assoc 
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		return $pdo;
	}
}
