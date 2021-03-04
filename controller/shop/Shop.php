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
		"model"		=>	"ShopModel"
	];

	function __construct()
	{
		if (isset($_SESSION['url'][0])) {
			\array_splice($_SESSION['url'], 0, 1);
		}
		//$this->getHtmlSearchShop();
		$this->selectView();

	}

	public function selectView()
	{
		if (isset($_SESSION['url'][0])) {
			if ($route = $this->selectRoute($this->routes)) {
				exit();
			}
			else {
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
		else {
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

	public function getHtmlSearchShop()
	{
		ob_start();
		include (VIEW.'shop/search.php');
		$this->html[] = ob_get_clean();
	}

}
