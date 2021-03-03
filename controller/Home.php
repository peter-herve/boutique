<?php
/**
 *
 */
class Home extends Routeur
{


	function __construct()
	{

		if (isset($_SESSION['url'][0])) {
			\array_splice($_SESSION['url'], 0, 1);
		}

		//$user = $_SESSION['user'];
		//echo $user->getPrenom();
		$this->pagetitle = "Home";
		$this->css = "home.css";
		ob_start();
		include (VIEW.'home.php');
		$this->html[] = ob_get_clean();
		$view = new View($this->getPageTitle(), $this->getCss());
		$view->sendMain($this->getHtml());
		$view->render();
	}
}
