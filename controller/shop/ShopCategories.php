<?php

class ShopCategories extends Shop
{
	protected $html;

	function __construct()
	{

		$this->renderView("Categories", "shop.css", $this->html, 'shop/categories.php');

	}

	public static function getCategories()
	{
		$cat = new ProductModel();
		return $cat->getCategories();
	}
}
