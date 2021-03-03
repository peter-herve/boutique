<?php
/**
 *
 */
class Home extends Routeur
{
	protected 	$main = [];
	private $routes = [
		"test1" 		=> 	"Test1",
		"test2"			=> 	"Test2"
	];

	function __construct()
	{
		\array_splice($_SESSION['url'], 0, 1);
		// echo "Home :</br>";
		// var_dump($_SESSION['url']);
		//var_dump($this->routes);
		$action = $this->selectRoute($this->routes);
		//$this->main[]= $action->getHtml();
		//$this->premier();
		//$this->deuxieme();
		//$this->initializeView();
	}

	// public function initializeView()
	// {
	// 	$view = new View();
	// 	$view->sendMain($this->getMain());
	// 	$view->render();
	// }

	// public function premier()
	// {
	// 	$name = 'Samir';
	// 	ob_start();
	// 	include(VIEW.'actus.php');
	// 	$this->main[] = ob_get_clean();
	// }
	//
	// public function deuxieme()
	// {
	// 	$test = "deuxieme controleur";
	// 	ob_start();
	// 	include (VIEW.'test1.php');
	// 	$this->main[] = ob_get_clean();
	// }

	// public function getMain()
	// {
	// 	return $this->main;
	// }
	//
	// public function addToMain($data)
	// {
	// 	$this->main[] = $data;
	// }

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
