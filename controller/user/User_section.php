<?php

/**
 *
 */
class User_section extends Routeur
{
	public $html;

	public $pagetitle = "User";
	public $css = "user/user.css";

	private $routes = [
		"inscription" 		=> 	"Inscription",
		"connexion"	=> 	"Connexion",
		"profil"	=>	"Profil",
		"deconnexion" => "UserConnexion"
	];

	protected $user;

	function __construct()
	{
		//echo "ekjfnercjke,rnfkjerfn";
		if (isset($_SESSION['url'][0])) {
			\array_splice($_SESSION['url'], 0, 1);
		}
		$user = $this->getUser();
		$this->selectView();
	}

	public function selectView()
	{
		if (isset($_SESSION['url'][0]) && $_SESSION['url'][0] == "inscription") {
			$this->pagetitle = "Inscription";
			$this->css = "inscription.css";
			ob_start();
			include (VIEW.'user/inscription.php');
			$this->html[] = ob_get_clean();
		}
		else if (isset($_SESSION['url'][0]) && $_SESSION['url'][0] == "profil") {
			$this->pagetitle = "Profil";
			ob_start();
			include (VIEW.'user/profil.php');
			$this->html[] = ob_get_clean();
		}
		else if (isset($_SESSION['url'][0]) && $_SESSION['url'][0] == "deconnexion") {
			$this->pagetitle = "Profil";
			ob_start();
			include (VIEW.'user/connexion.php');
			$this->html[] = ob_get_clean();
		}
		else {
			$this->pagetitle = "Connexion";
			ob_start();
			include (VIEW.'user/connexion.php');
			$this->html[] = ob_get_clean();
		}
		$view = new View($this->getPageTitle(), $this->getCss());
		$view->sendMain($this->getHtml());
		$view->render();
	}

	public function getUser()
	{
		if (isset($_SESSION['user'])) {
			return $_SESSION['user'];
		}else {
			return NULL;
		}
	}
}
