<?php

class ShopModel extends Routeur
{

	function __construct()
	{
		$this->pagetitle = "Modele";
		$this->css = "shop/shopmodele.css";
		ob_start();
		include (VIEW.'shop/model.php');
		$this->html[] = ob_get_clean();
		$view = new View($this->getPageTitle(), $this->getCss());
		$view->sendMain($this->getHtml());
		$view->render();
	}
}
