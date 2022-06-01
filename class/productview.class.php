<?php

class ProductView extends Product
{

	public function showProduct()
	{
		$results = $this->getProduct();
		echo json_encode($results);
	}
}
