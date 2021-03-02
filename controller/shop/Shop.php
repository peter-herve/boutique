<?php

/**
 *
 */
class Shop extends Routeur
{
	public $html;

	public $pagetitle = "SHOP!";
	public $css = "shop.css";

	private $routes = [
		"new" 		=> 	"New",
		"brands"	=> 	"Brands",
		"soldes"	=>	"Soldes"
	];

	function __construct()
	{
		if (isset($_SESSION['url'][0])) {
			\array_splice($_SESSION['url'], 0, 1);
		}
		$this->selectView();
	}

	public function selectView()
	{
		if (isset($_SESSION['url'][0]) && $_SESSION['url'][0] == "new") {
			$this->pagetitle = "NEWS!";
			$this->css = "shop.css";
			ob_start();
			include (VIEW.'shop/new.php');
			$this->html[] = ob_get_clean();
		}
		else if (isset($_SESSION['url'][0]) && $_SESSION['url'][0] == "brands") {
			$this->pagetitle = "Marques!";
			ob_start();
			include (VIEW.'shop/brands.php');
			$this->html[] = ob_get_clean();
		}
		else if (isset($_SESSION['url'][0]) && $_SESSION['url'][0] == "soldes") {
			$this->pagetitle = "SOLDES!";
			ob_start();
			include (VIEW.'shop/soldes.php');
			$this->html[] = ob_get_clean();
			//echo VIEW.'shop/soldes.php';
		}
		else {
			ob_start();
			include (VIEW.'shop/shop.php');
			$this->html[] = ob_get_clean();
			//echo VIEW.'shop/shop.php';
		}
		$view = new View($this->getPageTitle(), $this->getCss());
		$view->sendMain($this->getHtml());
		$view->render();
	}
}
