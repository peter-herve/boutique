 <?php
/**
* Class Routeur
*
* create routes and find controller
*/
class Routeur
{
	//private 	$page;						// Page demandée => pour css et titre onglet
	//public 		$params = [];				// Paramètres pour le futur controller choisi

	// Liste des pages et de leurs controllers
	private $controllers = [
		"home"				=> 'Home',
		"shop"				=> 'Shop',
		//"user"				=> 'User_section',
		//"product"			=> 'Product',
		//"order"				=> 'Order',
		//"payment"			=> 'Pay',
		"connexion"			=> 'Connexion',
		"inscription"		=> 'Inscription',
		"profil"			=> 'Profil',
        "admin"             => 'UserAdmin',
        "user_details"      => 'UserAdmin',
        "product-admin"     => 'ProductAdmin',
        "stockupdate"       => 'ProductAdmin',

	];
	private 	$controller;				// Controleur choisi


	public function __construct()
	{
		// Récupération user
		// if (isset($_SESSION['user'])) {
		// 	$this->$user = $_SESSION['user'];
		// }
		// Extration de l'url
		//$this->extractData($url);

		// echo "Router :</br>";
		// var_dump($_SESSION['url']);

		// Choix du controleur
		$this->controller = $this->selectController($this->controllers);
		if (!$this->controller) {
			$_SESSION['url'][0] = 'home';
			$this->controller = $this->selectController($this->controllers);
		}
		// Création vue
		//$this->initializeView();
	}

	// public function initializeView($page_name)
	// {
	// 	$view = new View($page_name);
	// 	$view->sendMain($this->controller->getMain());
	// 	$view->render();
	// }

	public function selectController($controllers)
	{
		if(key_exists($_SESSION['url'][0], $controllers))
		{
			$controller = $controllers[$_SESSION['url'][0]];
			return new $controller();
		}
		else {
			return False;
		}
	}

	// public function getMain()
	// {
	// 	// echo "ROUTER :";
	// 	// var_dump($this->main);
	// 	return $this->main;
	// }
	//
	// public function addToMain($data)
	// {
	// 	$this->main[] = $data;
	// }

	public function selectRoute($routes)
	{
		if(key_exists($_SESSION['url'][0], $routes))
		{
			$controller = $routes[$_SESSION['url'][0]];
			return new $controller();
		}
	}

	public function getHtml()
	{
		return $this->html;
	}

	public function getPageTitle()
	{
		return $this->pagetitle;
	}

	public function getCss()
	{
		return $this->css;
	}

}





///////////////
// 	public function renderController()
// 	{
//
// 		if(key_exists($this->page, $this->routes))
// 		{
// 			$controller = $this->routes[$this->page];
//
// 			$currentController = new $controller();
// 			//$this->main = $currentController->getMain();
// 			$view = new View($this->page);
//
// 			var_dump($this->getMain());
// 			$view->sendMain($currentController->getMain());
// 			$view->render();
//
// 		} else {
// 			echo "La page demandée n'existe pas";
// 		}
//
// 	}
//
//
// }
