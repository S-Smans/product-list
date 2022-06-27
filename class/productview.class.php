<?php

class ProductView extends Product
{

	// Gets all products and sends it as JSON to javascript
	public function showProduct()
	{
		$results = $this->getProduct();
		echo json_encode($results);
	}

	public function showSKU($sku)
	{
		return $this->getSKU($sku);
	}
}
