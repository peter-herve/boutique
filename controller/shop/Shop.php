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

	protected $routes = [
		"new" 		=> 	"ShopNew",
		"brands"	=> 	"ShopBrands",
		"soldes"	=>	"ShopSoldes",
		"categories"=>  "ShopCategories",
		"model"		=>	"ShopModel",
		"search"	=>	"ShopSearch"
	];

	function __construct()
	{
		//var_dump($_POST);
		if (isset($_SESSION['url'][0])) {
			\array_splice($_SESSION['url'], 0, 1);
		}

		// On regarde si appel à controller secondaire
		if ($controller = $this->selectRoute($this->routes)) {
			exit();
		}
		// Sinon comportement par default de la page
		else {
			$this->html[] = $this->getHtmlSearchShop();
			//$this->selectView();
			$this->renderView("Shop", "shop.css", $this->html, 'shop/shop.php');
		}


	}

	///// SEARCH BOX //////

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
		return ob_get_clean();
	}

	public function renderView($pagetitle, $css, $html, $view)
	{
		ob_start();
		include (VIEW.$view);
		$html[] = ob_get_clean();
		$view = new View($pagetitle, $css);
		$view->sendMain($html);
		$view->render();
	}

	public function cleanUrl()
	{
		if (isset($_SESSION['url'][0])) {
			\array_splice($_SESSION['url'], 0, 1);
		}
	}

	public function getHtml()
	{
		return $this->html;
	}

}
