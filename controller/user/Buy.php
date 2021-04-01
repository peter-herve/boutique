<?php

/**
 *
 */
class Buy extends Routeur
{

	function __construct()
	{
		// Vérification panier et commande
		if (isset($_POST['basket'])){
			new Basket($_POST['article_id'], $_POST['article_code'], $_POST['size'], $_POST['article_qty'], $_POST['article_price']);
			header('Location: '.URL.'shop/model/'.$_POST['article_id']);
		}
		else{ //if (isset($_POST['order'])){
			new Order();
			die();
		}
	}
}
