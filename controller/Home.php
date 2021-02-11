<?php

/**
 *
 */
class Home extends Routeur
{

	function __construct()
	{
		$view = new View('Home');
		$view->render();
	}
}
