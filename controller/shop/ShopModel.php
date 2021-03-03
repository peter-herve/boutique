<?php

class ShopModel extends Routeur
{

	function __construct()
	{
		if (isset($_SESSION['url'][0])) {
			\array_splice($_SESSION['url'], 0, 1);
		}
		var_dump($_SESSION['url']);
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
