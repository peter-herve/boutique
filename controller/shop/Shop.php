<?php

/**
 *
 */
class Shop extends Routeur
{
	// public $html;
	//
	// public $pagetitle = "SHOP!";
	// public $css = "shop.css";

	private $routes = [
		"new" 		=> 	"ShopNew",
		"brands"	=> 	"ShopBrands",
		"soldes"	=>	"ShopSoldes",
		"categories"=>  "ShopCategories",
        "model"     =>  "ShopArticle",
		"search"	=>	"ShopSearch"
	];

	function __construct()
	{
		$this->cleanUrl();
		$this->getHtmlSearchShop();
		$this->selectView();

	}

	public function selectView()
	{
		if (isset($_SESSION['url'][0]) && $route = $this->selectRoute($this->routes)) {
			exit();
		}
		else {
			$model = new ProductModel();
			$this->new = $model->getNewProducts();
			$this->soldes = $model->getSoldes();
			$this->bestSells = $model->getBestSells();

			$this->pagetitle = "Shop";
			$this->css = "shop.css";
			ob_start();
			include (VIEW.'shop/shop.php');
			$this->html[] = ob_get_clean();
			$view = new View($this->getPageTitle(), $this->getCss());
			$view->sendMain($this->getHtml());
			$view->render();
		}
	}

	public function getProductCard($product)
	{
		ob_start();
		include (VIEW.'shop/product_card.php');
		$ret = ob_get_clean();
		return $ret;
	}

	public function getHtmlSearchShop()
	{
		$categories = new ProductModel();
		$categories = $categories->getCategories();
		$colors = new ProductModel();
		$colors = $colors->getColors();
		$fabrics = new ProductModel();
		$fabrics = $fabrics->getFabrics();
		ob_start();
		include (VIEW.'shop/searchbox.php');
		$this->html[] = ob_get_clean();
	}

}
