<?php

class ShopArticle extends Routeur
{

    public $main = [];
    public $html;

    public $pagetitle = "Modele";
    public $css = "shop/shopmodele.css";

	function __construct()
	{
		//Menage Url
		if (isset($_SESSION['url'][0])) {
			\array_splice($_SESSION['url'], 0, 1);
		}

		if (isset($_SESSION['url'][0])) {
			$this->article = $this->getArticle($_SESSION['url'][0]);
		}

		// Vérification panier et commande
		if (isset($_GET['basket'])){
            new Basket($this->article->getId(), $this->article->getArticleCode(), 1, $this->article->getPrice());
		}

		if ($this->article) {
			//obtention des produits liés
			$alt_products = $this->article->getAltArticles();
			$comments = $this->article->getComments();
			$sizes = $this->article->getSizes();
			if (isset($_SESSION['user'])) {
				$likeModel = new LikeModel();
				$userLikes = $likeModel->checkLike($this->article->getId(), $_SESSION['user']->getId());
			}else {
				$userLikes = False;
			}

			//Génération de la vue
			ob_start();
			include (VIEW.'shop/model.php');
			$this->html[] = ob_get_clean();
		}

		else {
			$this->html[] = "Oups article introuvable...";
		}

		$view = new View($this->getPageTitle(), $this->getCss());
		$view->sendMain($this->getHtml());
		$view->render();
	}

    public function getArticle($code)
    {
        $product_data = new ProductModel();
        $product_data->connectdb();
        return $product_data->findArticle($code);
    }


	public function checkUrl()
	{
		if (isset($_SESSION['url'][1]) && $_SESSION['url'][1]=='basket')
        {
            $this->code = $_SESSION['url'][0];
            new Basket($this->article->getId(), $this->article->getArticleCode(), 1, $this->article->getPrice());
        }
	}
}
