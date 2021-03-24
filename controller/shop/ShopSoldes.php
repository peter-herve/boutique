<?php

class ShopSoldes extends Routeur
{

	function __construct()
	{
		$this->articles = [1, 2, 3, 4, 5, 6];
		$this->pagetitle = "Soldes";
		$this->css = "shop.css";
		ob_start();
		include (VIEW.'shop/soldes.php');
		$this->html[] = ob_get_clean();
		$view = new View($this->getPageTitle(), $this->getCss());
		$view->sendMain($this->getHtml());
		$view->render();
	}
}
