<?php

/**
 *
 */
class Home extends Routeur
{
	protected $data;
	protected $main;

	function __construct()
	{
		$name = 'Samir';
		ob_start();
		include(VIEW.'actus.php');
		$this->data = ob_get_clean();
		//$this->addToMain($data);
	}

	public function getMain()
	{
		return($this->data);
	}

}
