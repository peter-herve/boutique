<?php

/**
 *
 */
class Likes extends Shop
{
	private $pagetitle = "Mes likes";
	private $css = '';

	function __construct()
	{

		if (isset($_SESSION['user'])) {

			$products = [];
			$model = new LikeModel();
			$model2 = new ProductModel();
			$likedProducts = $model->getUserLikes($_SESSION['user']->getId());
			foreach ($likedProducts as $product) {
				$model2->connectdb();
				$products[] = $model2->findArticle($product['article_id']);
				$model2->dbclose();
			}
			ob_start();
	        include (VIEW.'user/likes.php');
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
