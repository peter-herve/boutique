<?php

class ShopCategories extends Routeur
{

	function __construct()
	{
		$this->pagetitle = "Categories";
		$this->css = "shop.css";
		ob_start();
		include (VIEW.'shop/categories.php');
		$this->html[] = ob_get_clean();
		$view = new View($this->getPageTitle(), $this->getCss());
		$view->sendMain($this->getHtml());
		$view->render();
	}
}
