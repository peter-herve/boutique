<?php
	/**
	 *
	 */
	class Article
	{
		private $id;
		private $type;
		private $category_name;
		private $article_name;
		private $article_description;
		private $article_color;
		private $article_fabric;
		private $article_price;
		private $article_size;
		private $article_stock;
		private $date_added;
		private $article_code;
		private $avg_rates;
		private $nb_likes;
		private $comments;
		private $alt_articles;

		function __construct($tab = Null)
		{
			if ($tab) {
				$this->id = 				$tab['id'];
				//$this->type = 				$tab['type'];
				if (isset($tab['category_name'])) {
					$this->category_name = 		$tab['category_name'];
				}
				if (isset($tab['article_name'])) {
					$this->article_name = 		$tab['article_name'];
				}
				if (isset($tab['article_description'])) {
					$this->article_description = $tab['article_description'];
				}
				if (isset($tab['article_color'])) {
					$this->article_color = 		$tab['article_color'];
				}
				if (isset($tab['article_fabric'])) {
					$this->article_fabric = 	$tab['article_fabric'];
				}
				if (isset($tab['article_price'])) {
					$this->article_price = 		$tab['article_price'];
				}
				if (isset($tab['date_added'])) {
					$this->date_added = 		$tab['date_added'];
				}

				if (isset($tab['article_code'])) {
					$this->article_code = 		$tab['article_code'];
				}

				if (isset($tab['stock'])) {
					$this->article_stock = 		$tab['stock'];
				}
				//$this->avg_rates = $this->getAvgRatesFromModel($this->id);
				//$this->nb_likes = $this->getNbLikesFromModel($this->id);
				//$this->comments = $this->getCommentsFromModel($this->id);
				//$this->alt_articles = $this->getAltArticles($this->id);
				if (isset($tab['promo_percent'])) {
					$this->soldes_percent = $tab['promo_percent'];
				}

				if (isset($tab['article_size'])) {
					$this->article_size = 		$tab['article_size'];
				}
			}
		}
		public function getAvgRates()
		{
			$likemodel = new LikeModel();
			$rate = $likemodel->getAvgRatingforProductId($this->id);
			return $rate;
		}

		public function getNbLikes()
		{
			$model = new LikeModel();
			$nb_likes = $model->getNbOfLikesForProductId($this->id);
			return $nb_likes;
		}

		public function getComments()
		{
			$comments = new CommentModel();
			$comments = $comments->getCommentsForProductId($this->id);
			return $comments;
		}

		public function getAltArticles()
		{
			$model = new ProductModel();
			return $model->findAltArticles($this->id, $this->category_name);
		}

		public function getPromo()
		{
			if (isset($this->soldes_percent)) {
				//echo ($this->soldes_percent);
				return floatval($this->getPrice()) -(floatval($this->getPrice()) * floatval($this->soldes_percent) / 100);
			}else {
				return False;
			}
		}

		public function getSizes()
		{
			$model = new ProductModel();
			return $model->getSizes($this->id);
		}

		public function getId() 			{return $this->id;}
		public function getType() 			{return $this->type;}
		public function getCategoryName() 	{return $this->category_name;}
		public function getName() 			{return $this->article_name;}
		public function getDescription() 	{return $this->article_description;}
		public function getColor() 			{return $this->article_color;}
		public function getFabric() 		{return $this->article_fabric;}
		public function getPrice() 			{return $this->article_price;}
		public function getSize() 			{return $this->article_size;}
		public function getStock() 			{return $this->article_stock;}
		public function getDateAdded() 		{return $this->date_added;}
		public function getArticleCode() 	{return $this->article_code;}
		//public function getAvgRates() 		{return $this->avg_rates;}
		//public function getNbLikes() 		{return $this->nb_likes;}
		// public function getComments() 		{return $this->comments;}

	}
