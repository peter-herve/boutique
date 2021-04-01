<?php

/**
 *
 */
class Commandes extends Shop
{
	private $pagetitle = "Mes commandes";
	private $css = '';

	function __construct()
	{
		if (isset($_SESSION['user'])) {
			$model = new OrderModel();
			$commandes = $model->getUserCommandes($_SESSION['user']->getId());
			// var_dump($commandes);

			ob_start();
	        include (VIEW.'user/commandes.php');
	        $this->html[] = ob_get_clean();
	        $view = new View($this->pagetitle, $this->css);
	        $view->sendMain($this->html);
	        $view->render();
		}
		else {
			header('Location: '.URL.'connexion');
		}
	}
}
