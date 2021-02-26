<?php
/**
 *
 */
class Home extends Routeur
{

	function __construct()
	{
		$this->premier();
		$this->deuxieme();




	}

	public function premier()
	{
		$name = 'Samir';
		ob_start();
		include(VIEW.'actus.php');
		$this->main[] = ob_get_clean();
	}

	public function deuxieme()
	{
		$test = "deuxieme controleur";
		ob_start();
		include (VIEW.'test1.php');
		$this->main[] = ob_get_clean();
	}



}
