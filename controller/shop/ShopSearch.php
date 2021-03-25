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


			// $this->renderView("Recherche produit", "shop.css", $this->html, 'shop/search.php');
			//

		}
		elseif (isset($_GET['mainSearch'])) {
			// Barre de recherche
			$this->html[] = $this->getHtmlSearchShop();

			//Résultats de recherche
			$this->html[] = $this->getMainSearchResults();

			//rendu de la page
			$view = new View("Recherche", "shop.css");
			//var_dump( $this->html);
			$view->sendMain($this->getHtml());
			$view->render();
		}

		// Sinon on redirige sur le shop
		else {
			header('Location: '.URL.'shop');
		}


	}

	public function getMainSearchResults()
	{
		// Obtention du tableau contenant les clef
		//  à chercher avec les valeurs à trouver
		$query = $this->getMainSearchQuery();

		//Appel à la base
		$model = new ProductModel();
		$products = $model->findArticleBySearch($query);


		ob_start();
		include (VIEW.'shop/search.php');
		return ob_get_clean();

	}

	public function getSearchResults()
	{
		// Obtention du tableau contenant les clef
		//  à chercher avec les valeurs à trouver
		$query = $this->getSearchQuery();

		//Appel à la base
		$model = new ProductModel();
		$products = $model->findArticleBySearch($query);


		ob_start();
		include (VIEW.'shop/search.php');
		return ob_get_clean();

	}

	public function getSearchQuery()
	{
		//Restructuration des données du $_GET
		$tab = [];

		$categories = new ProductModel();
		$categories = $categories->getCategories();
		foreach ($categories as $key => $value) {
			if (array_key_exists ( $value['category_name'], $_GET)) {
				$tab['category_name'][] = $value['category_name'];
			}
		}
		$colors = new ProductModel();
		$colors = $colors->getColors();

		foreach ($colors as $color) {
			if (array_key_exists ( $color['article_color'], $_GET)) {
				$tab['article_color'][] = $color['article_color'];
			}
		}
		$fabrics = new ProductModel();
		$fabrics = $fabrics->getFabrics();
		foreach ($fabrics as $key => $value) {
			if (array_key_exists ( $value['article_fabric'], $_GET)) {
				$tab['article_fabric'][] = $value['article_fabric'];
			}
		}


		// Création de la requette
		$query = "SELECT * FROM articles WHERE ";

		$countfields = count($tab);
		$i = 0;
		foreach ($tab as $field => $values) {
			$count = count($values);
			if ($count > 1) {
				$query .= '(';
				foreach ($values as $key => $value) {
					if ( $key < $count -1) {
						$query .= $field." = '".$value."' OR ";
					}else {
						$query .= $field." = '".$value."'";
					}
				}
				$query .= ')';
			}
			else {
				$query .= $field." = '".$values[0]."'";
			}
			if ($i < $countfields-1) {
				$query .= ' AND ';
			}
			$i++;
		}
		return $query;
	}

	public function getMainSearchQuery()
	{
		//Restructuration des données du $_GET
		$tab = [];

		$categories = new ProductModel();
		$categories = $categories->getCategories();
		foreach ($categories as $key => $value) {
			if ( $_GET['search'] == $value['category_name']) {
				$tab['category_name'][] = $value['category_name'];
			}
		}
		$colors = new ProductModel();
		$colors = $colors->getColors();
		foreach ($colors as $color) {
			if ($_GET['search'] == $color['article_color']) {
				$tab['article_color'][] = $color['article_color'];
			}
		}
		$fabrics = new ProductModel();
		$fabrics = $fabrics->getFabrics();
		foreach ($fabrics as $key => $value) {
			if ($_GET['search'] == $value['article_fabric']) {
				$tab['article_fabric'][] = $value['article_fabric'];
			}
		}


		// Création de la requette
		$query = "SELECT * FROM articles WHERE ";

		$countfields = count($tab);
		$i = 0;
		foreach ($tab as $field => $values) {
			$count = count($values);
			if ($count > 1) {
				$query .= '(';
				foreach ($values as $key => $value) {
					if ( $key < $count -1) {
						$query .= $field." = '".$value."' OR ";
					}else {
						$query .= $field." = '".$value."'";
					}
				}
				$query .= ')';
			}
			else {
				$query .= $field." = '".$values[0]."'";
			}
			if ($i < $countfields-1) {
				$query .= ' AND ';
			}
			$i++;
		}
		return $query;
	}
}
