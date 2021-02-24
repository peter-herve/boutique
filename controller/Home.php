<?php

/**
 *
 */
class Home extends Routeur
{

	private $user;

	function __construct()
	{
		$view = new View('Home');
		$view->render();
	}
}
