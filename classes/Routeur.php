 <?php
session_start();
/**
* Class Routeur
*
* create routes and find controller
*/
class Routeur
{
	protected $user;
	protected $main = [];
	private $url;			// Sauvegarde de l'url
	private $page;			// Page demandée
	protected $params = [];	// Paramètres pour le futur controller choisi
	protected $post;			// Sauvegarde des données Post
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
		"test"				=> 'Test',
		"article"			=> 'ProductManager'
	];


	public function __construct($url)
	{
		$this->main = NUll;
		if (isset($_SESSION['user'])) {
			$this->$user = $_SESSION['user'];
		}
		$this->url = $url;
		$this->extractData();
	}

	public function extractData()
	{
		$elements = explode('/', $this->url);
		$this->page = $elements[0];
		for($i = 1; $i<count($elements); $i++)
		{
			$this->params[] = $elements[$i];
		}
	}


	public function getMain()
	{
		return $this->main;
	}

	public function renderController()
	{

		if(key_exists($this->page, $this->routes))
		{
			$controller = $this->routes[$this->page];

			$currentController = new $controller();
			//$this->main = $currentController->getMain();
			$view = new View($this->page);

			$view->sendMain($currentController->getMain());
			$view->render();

		} else {
			echo "La page demandée n'existe pas";
		}

	}


}
