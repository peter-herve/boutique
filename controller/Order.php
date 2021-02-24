<?php

/**
 *
 */
class Order extends Routeur
{

	private $user;

	function __construct()
	{
		//$basket = new Basket(1, 1);
		echo "<pre>";
		//var_dump($basket->cookie_value);
		//echo "il y a ".$basket->getBasketQuantity()." produits";
		echo "</pre>";
		$view = new View('Home');
		$view->render();
	}
}
