<?php

class ShopBrands extends Routeur
{

	function __construct()
	{
		$this->pagetitle = "Marques";
		$this->css = "shop.css";
		ob_start();
		include (VIEW.'shop/brands.php');
		$this->html[] = ob_get_clean();
		$view = new View($this->getPageTitle(), $this->getCss());
		$view->sendMain($this->getHtml());
		$view->render();
	}
}
