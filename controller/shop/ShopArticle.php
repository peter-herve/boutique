<?php

class ShopArticle extends Routeur
{

    public $main = [];
    public $html;

    public $pagetitle = "Shop produit";
    public $css = "shop.css";

	function __construct()
	{
		// Vérification panier et commande
		$this->checkBasketandOrder();
		// Ajout nouveau commentaire si $_POST
		$this->checkNewComment();
		//Récupération des données du produit
		$product = $this->dataForArticle();
		if ($product) {
			//Obteniton des likes
			$likemodel = new LikeModel();
			$rate = $likemodel->getAvgRatingforProductId($this->data[0]['id']);
			$nb_likes = $likemodel->getNbOfLikesForProductId($this->data[0]['id']);

			//Obteniton des commentaires
			$comments = new CommentModel();
			$comments = $comments->getCommentsForProductId($this->data[0]['id']);

			//Génération de la vue
			$this->pagetitle = "Modele";
			$this->css = "shop/shopmodele.css";
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

    public function dataForArticle()
    {
        $product_data=new ProductModel();
        $product_data->connectdb();
        return $this->data =  $product_data->findArticle($this->code);
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

	public function checkBasketandOrder()
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
        $this->code = $_SESSION['url'][1];
	}
}
