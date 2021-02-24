<?php

/**
 *
 */
class Shop extends Routeur
{
	//protected $user;



	function __construct()
	{
		$view = new View('Shop');
		// $view->renderHeader($this->user);
		// $view->renderMain($this->productList)
		$view->render();
	}
}
