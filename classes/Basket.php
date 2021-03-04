<?php

/**
 * Used to control products in basket with cookies
 */
class Basket
{
	private $cookie_name = 'basket';
	public $cookie_value = [];
	/* $cookie_value = 	[$productId => quantity,
						$productId => quantity]
	*/

	function __construct($productId = NULL, $quantity = NULL)
	{
	    var_dump($productId);
		// Check if a cookie already exists
		$this->getCookie();
		// Add product to the cookie
		if ($productId && $quantity) {
            unset($_COOKIE['basket']);
			$this->addProduct($productId, $quantity);
			$this->setCookie();
		}

	}

	public function getCookie()
	{
		// Stores cookie value in object
		if (isset($_COOKIE[$this->cookie_name])) {
			$this->cookie_value = json_decode($_COOKIE[$this->cookie_name], true);
		}
		else $this->setCookie();
	}

	public function addProduct($productId, $quantity)
	{
		// Adds a product to the basket cookie
		$this->cookie_value[] = [$productId => $quantity];
	}

	public function setCookie()
	{
		// Adds a cookie for 30 days
		return setcookie($this->cookie_name, json_encode($this->cookie_value), time()+3600*24*30);
	}

	public function getProducts()
	{
		// Returns each product as object-product
	}

	public function getBasketQuantity()
	{
		return count($this->cookie_value);
	}
}
