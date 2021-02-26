 <?php
/**
* Class Routeur
*
* create routes and find controller
*/
class Routeur
{
	protected 	$main = [];
	private 	$page;						// Page demandée => pour css et titre onglet
	public 		$params = [];				// Paramètres pour le futur controller choisi
	private 	$controller;				// Controleur choisi
	// Liste des pages et de leurs controllers
	private $routes = [
		"home"				=> 'Home',
		"shop"				=> 'Shop',
		"product"			=> 'Product',
		"order"				=> 'Order',
		"payment"			=> 'Pay',
		"connexion"			=> 'Connexion',
		"inscription"		=> 'Profil',
		"profil"			=> 'Profil',
        "admin"             => 'UserAdmin',
        "user_details"      => 'UserAdmin',
        "product-admin"     => 'ProductAdmin',
        "stockupdate"       => 'ProductAdmin',
	];


	public function __construct()
	{
		// Récupération user
		if (isset($_SESSION['user'])) {
			$this->$user = $_SESSION['user'];
		}
		// Extration de l'url
		//$this->extractData($url);

		echo "Router :</br>";
		var_dump($_SESSION['url']);

		// Choix du controleur
		$this->selectRoute($this->routes);
		// Création vue
		$this->initializeView();
	}

	public function initializeView()
	{
		$view = new View($_SESSION['url'][0]);
		$view->sendMain($this->controller->getMain());
		$view->render();
	}

	public function selectRoute($routes)
	{
		if(key_exists($_SESSION['url'][0], $routes))
		{
			$controller = $routes[$_SESSION['url'][0]];
			$this->controller = new $controller();

		}
	}

	// public function extractData($url)
	// {
	// 	$elements = explode('/', $url);
	// 	$this->page = $elements[0];
	// 	for($i = 1; $i<count($elements); $i++)
	// 	{
	// 		$this->params[] = $elements[$i];
	// 	}
	// 	//var_dump($this->params);
	// }

	public function getMain()
	{
		return $this->main;
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
