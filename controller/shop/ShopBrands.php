<?php

class ShopBrands extends Shop
{
	protected $html;

	function __construct()
	{
		$this->renderView("Marques", "shop.css", $this->html, 'shop/brands.php');

	}

	public static function getBrands()
	{
		// code...
	}
}
