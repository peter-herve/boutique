<?php

/**
 *
 */
class ShopNew extends Routeur
{

	function __construct()
	{
		$this->pagetitle = "Nouveautés";
		$this->css = "shop.css";
		ob_start();
		include (VIEW.'shop/new.php');
		$this->html[] = ob_get_clean();
		$view = new View($this->getPageTitle(), $this->getCss());
		$view->sendMain($this->getHtml());
		$view->render();
	}
}
