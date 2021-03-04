<?php
class ShopSearch extends Shop
{
	function __construct()
	{
		// On efface l'appel à ce controlleur
		$this->cleanUrl();
		// Si données $_GET (recherche)
		if (isset($_GET['shopsearch'])) {
			// Barre de recherche
			$this->html[] = $this->getHtmlSearchShop();

			//Résultats de recherche
			$this->html[] = $this->getSearchResults();

			//rendu de la page
			$view = new View("Recherche", "shop.css");
			//var_dump( $this->html);
			$view->sendMain($this->getHtml());
			$view->render();


			//$this->renderView("Recherche produit", "shop.css", $this->html, 'shop/search.php');


		}
		// Sinon on redirige sur le shop
		else {
			header('Location: '.URL.'shop');
		}


	}

	public function getSearchResults()
	{
		// Obtention du tableau contenant les clef
		//  à chercher avec les valeurs à trouver
		$this->getSearchQuery();

		//Appel à la base
		$model = new ProductModel();
		//$products = $model->findArticleBySearch($_GET[]);
		// echo "<pre>";
		// var_dump($products);
		// echo $products[0]->getName();
		// echo "</pre>";

		ob_start();
		include (VIEW.'shop/search.php');
		return ob_get_clean();

		// if (isset($_GET['category'])) {
		// 	$model = new ProductModel();
		// 	$products = $model->findArticleByCategory($_GET['category']);
		// 	// echo "<pre>";
		// 	// var_dump($products);
		// 	// echo $products[0]->getName();
		// 	// echo "</pre>";
		//
		// 	ob_start();
		// 	include (VIEW.'shop/search.php');
		// 	return ob_get_clean();
		// }
		// else {
		// 	return Null;
		// }

	}

	public function getSearchQuery()
	{
		$tab = [];
		$categories = new ProductModel();
		$categories = $categories->getCategories();
		foreach ($categories as $key => $value) {
			if (array_key_exists ( $value['category_name'], $_GET)) {
				$tab['category'][] = $value['category_name'];
			}
		}

		$colors = new ProductModel();
		$colors = $colors->getColors();
		var_dump($colors);
		foreach ($colors as $key => $value) {
			if (array_key_exists ( $value['article_color'], $_GET)) {
				$tab['color'][] = $value['article_color'];
			}
		}

		$fabrics = new ProductModel();
		$fabrics = $fabrics->getFabrics();
		foreach ($fabrics as $key => $value) {
			if (array_key_exists ( $value['article_fabric'], $_GET)) {
				$tab['fabric'][] = $value['article_fabric'];
			}
		}
		echo "<pre>";
		var_dump($tab);
		echo "</pre>";


	}


}
