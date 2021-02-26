<?php
/**
 *
 */
class Home extends Routeur
{
	private $routes = [
		"test1" 		=> 	"Test1",
		"test2"			=> 	"Test2"
	];

	function __construct()
	{
		\array_splice($_SESSION['url'], 0, 1);
		echo "Home :</br>";
		var_dump($_SESSION['url']);
		//var_dump($this->routes);
		$this->selectRoute($this->routes);
		//$this->premier();
		//$this->deuxieme();
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

	// public function selectRoute()
	// {
	// 	if(key_exists($_SESSION['url'][0], $this->routes))
	// 	{
	// 		$controller = $this->routes[$_SESSION['url'][0]];
	// 		$this->controller = new $controller();
	//
	// 	}
	// }



}
