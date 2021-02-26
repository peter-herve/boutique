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

		function __construct($tab = Null)
		{
			if ($tab) {
				$this->id = $tab['id'];
				$this->type = $tab['type'];
				$this->category_name = $tab['category_name'];
				$this->article_name = $tab['article_name'];
				$this->article_description = $tab['article_description'];
				$this->article_color = $tab['article_color'];
				$this->article_fabric = $tab['article_fabric'];
				$this->article_price = $tab['article_price'];
				$this->article_size = $tab['article_size'];
				$this->article_stock = $tab['article_stock'];
				$this->date_added = $tab['date_added'];
				$this->article_code = $tab['article_code'];
			}
		}

		public function getId() {return $this->id;}
		public function getType() {return $this->type;}
		public function getCategoryName() {return $this->category_name;}
		public function getName() {return $this->article_name;}
		public function getDescription() {return $this->article_description;}
		public function getColor() {return $this->article_color;}
		public function getFabric() {return $this->article_fabric;}
		public function getPrice() {return $this->article_price;}
		public function getSize() {return $this->article_size;}
		public function getStock() {return $this->article_stock;}
		public function getDateAdded() {return $this->date_added;}
		public function getArticleCode() {return $this->article_code;}

	}
