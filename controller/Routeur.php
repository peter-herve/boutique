 <?php
/**
* Class Routeur
*
* create routes and find controller
*/
class Routeur
{
	// Liste des pages et de leurs controllers
	private $controllers = [
		"home"				=> 'Home',
		"shop"				=> 'Shop',
		//"user"				=> 'User_section',
		"connexion"			=> 'Connexion',
		"inscription"		=> 'Inscription',
		"profil"			=> 'Profil',
        "admin"             => 'Admin',
        "user_details"      => 'UserAdmin',
        "product-admin"     => 'ProductAdmin',
        "stockupdate"       => 'StockUpdate',
        "orderdetails"      => 'Orderdetails',
        "userdetails"       => 'UserDetails',
        "productupdate"     => 'ProductUpdate',
	];
	private 	$controller;				// Controleur choisi


	public function __construct()
	{
		// Choix du controleur
		if ($this->controller = $this->selectController($this->controllers));
		else {
			header('Location: home');
			$_SESSION['url'][0] = 'home';
			new Home();
			exit();
		}
	}


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
