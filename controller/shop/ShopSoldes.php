<?php

class ShopSoldes extends Shop
{

	function __construct()
	{
		$model = new ProductModel();
		$this->articles = $model->getSoldes();

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
