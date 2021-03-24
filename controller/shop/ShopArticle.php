<?php

class ShopArticle extends Routeur
{

    public $main = [];
    public $html;

    public $pagetitle = "Modele";
    public $css = "shop/shopmodele.css";

	function __construct()
	{
		// Ajout nouveau commentaire si $_POST
		$this->checkNewComment();
		// Vérification panier et commande
		$this->checkUrl();

		//Menage Url
		if (isset($_SESSION['url'][0])) {
			\array_splice($_SESSION['url'], 0, 1);
		}

		if (isset($_SESSION['url'][0])) {
			$this->article = $this->getArticle($_SESSION['url'][0]);
		}
		if ($this->article) {
			//obtention des produits liés
			$alt_products = $this->article->getAltArticles();
			$comments = $this->article->getComments();
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
        return   $product_data->findArticle($code);
    }

	// Recherche si nouveau commentaire, si oui l'ajoute
	public function checkNewComment()
	{
		if (isset($_POST['commentAdd']) && isset($_SESSION['user'])) {
			$comment = trim(htmlspecialchars($_POST['comment']));
			if ($comment != '') {
				$model = new CommentModel();
				$model->userAddCommentToProductId($_SESSION['user']->getId(), $_POST['comment'], $this->data[0]['id'], NULL);
			}
		}
	}

	public function checkUrl()
	{
		if ($_SESSION['url'][1]=='basket')
        {
            $this->code = $_SESSION['url'][2];
            new Basket($this->code, 1);
        }
	    if ($_SESSION['url'][1]=='order')
        {
            $this->code = $_SESSION['url'][2];
            new Order();
        }
	}
}
