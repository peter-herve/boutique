<?php

/**
 *
 */
class Connexion extends Routeur
{
	//protected $user;



	function __construct()
	{
		// $this->user = new User();
		if ($this->user->checkConnexion('login', 'password'))
		{
			$this->user->connect();
		}
		$view = new View('Connexion');
		$view->renderHeader($this->user);
		$view->renderMain($this->productList)
		$view->render();
	}
}
