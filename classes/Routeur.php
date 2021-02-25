 <?php
session_start();
/**
* Class Routeur
*
* create routes and find controller
*/
class Routeur
{
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
        "stockupdate"       => 'ProductAdmin',
	];


	public function __construct($url)
	{
		$this->url = $url;
		if ($_POST) {
			$this->post = $_POST;
		}

		$this->extractData();

		// echo "Page :";
		// var_dump($this->page);
		// echo "params :";
		// var_dump($this->params);
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

	public function renderController()
	{
		if(key_exists($this->page, $this->routes))
		{
			$controller = $this->routes[$this->page];

			$currentController = new $controller();
			//$currentController->$method($request);

		} else {
			echo '404';
		}

	}
}
