<?php

class ProductModel extends Request {



    public function addProduct($category,$name,$description,$color,$fabric,$price,$code)
    {
        $query = $this->pdo->prepare("INSERT INTO `articles`(category_name, article_name, article_description, article_color, article_fabric, article_price, article_code) VALUES (:category, :nom, :description, :color, :fabric, :price, :code)");
        $query->execute(['category'=>$category, "nom"=>$name, "description"=>$description, "color"=>$color, "fabric"=>$fabric, "price"=>$price, "code"=>$code]);
    }
    public function addProductDetailstop($id, $name,$price,$code)
    {
        $query = $this->pdo->prepare("INSERT INTO `article_stock`(article_id, article_name, article_price, article_size, article_code)  VALUES (:id, :nom, :price, 'S', :code)");
        $query->execute(["id"=>$id, "nom" => $name, "price" => $price, "code" => $code]);
        $query = $this->pdo->prepare("INSERT INTO `article_stock`(article_id,article_name, article_price, article_size, article_code)  VALUES (:id, :nom, :price, 'M', :code)");
        $query->execute(["id"=>$id, "nom" => $name, "price" => $price, "code" => $code]);
        $query = $this->pdo->prepare("INSERT INTO `article_stock`(article_id,article_name, article_price, article_size, article_code)  VALUES (:id, :nom, :price, 'L', :code)");
        $query->execute(["id"=>$id, "nom" => $name, "price" => $price, "code" => $code]);
        $query = $this->pdo->prepare("INSERT INTO `article_stock`(article_id,article_name, article_price, article_size, article_code)  VALUES (:id, :nom, :price, 'XL', :code)");
        $query->execute(["id"=>$id, "nom" => $name, "price" => $price, "code" => $code]);
        $query = $this->pdo->prepare("INSERT INTO `article_stock`(article_id, article_name, article_price, article_size, article_code)  VALUES (:id, :nom, :price, 'XXL', :code)");
        $query->execute(["id"=>$id, "nom" => $name, "price" => $price, "code" => $code]);
    }

    public function addProductDetailsbottom($id, $name,$price,$code)
    {
        $query = $this->pdo->prepare("INSERT INTO `article_stock`(article_id, article_name, article_price, article_size, article_code)  VALUES (:id, :nom, :price, '36', :code)");
        $query->execute(["id"=>$id, "nom" => $name, "price" => $price, "code" => $code]);
        $query = $this->pdo->prepare("INSERT INTO `article_stock`(article_id, article_name, article_price, article_size, article_code)  VALUES (:id, :nom, :price, '38', :code)");
        $query->execute(["id"=>$id, "nom" => $name, "price" => $price, "code" => $code]);
        $query = $this->pdo->prepare("INSERT INTO `article_stock`(article_id, article_name, article_price, article_size, article_code)  VALUES (:id, :nom, :price, '40', :code)");
        $query->execute(["id"=>$id, "nom" => $name, "price" => $price, "code" => $code]);
        $query = $this->pdo->prepare("INSERT INTO `article_stock`(article_id, article_name, article_price, article_size, article_code)  VALUES (:id, :nom, :price, '42', :code)");
        $query->execute(["id"=>$id, "nom" => $name, "price" => $price, "code" => $code]);
        $query = $this->pdo->prepare("INSERT INTO `article_stock`(article_id, article_name, article_price, article_size, article_code)  VALUES (:id, :nom, :price, '44', :code)");
        $query->execute(["id"=>$id, "nom" => $name, "price" => $price, "code" => $code]);
        $query = $this->pdo->prepare("INSERT INTO `article_stock`(article_id, article_name, article_price, article_size, article_code)  VALUES (:id, :nom, :price, '46', :code)");
        $query->execute(["id"=>$id, "nom" => $name, "price" => $price, "code" => $code]);
        $query = $this->pdo->prepare("INSERT INTO `article_stock`(article_id, article_name, article_price, article_size, article_code)  VALUES (:id, :nom, :price, '48', :code)");
        $query->execute(["id"=>$id, "nom" => $name, "price" => $price, "code" => $code]);
    }

    public function checkArticlecode($code)
    {
        $query = $this->pdo->prepare("SELECT id FROM articles WHERE article_code = :code");
        $query->execute(['code'=>$code]);
        return $query->fetchAll();
    }

    public function findArticle($code)
    {
        $query = $this->pdo->prepare("SELECT * FROM articles WHERE id = :code");
        $query->execute(["code"=>$code]);
        // return $allresult_stock = $query->fetchAll();
		$allresult_stock = $query->fetchAll();
        return new Article($allresult_stock[0]);
    }

    public function findArticleStock($code)
    {
        $query = $this->pdo->prepare("SELECT id FROM article_stock WHERE article_code = :code");
        $query->execute(["code"=>$code]);
        $allresult_stock = $query->fetch(PDO::FETCH_ASSOC);
        var_dump($allresult_stock);
        return new Article($allresult_stock['article_code']);
    }

    public function findArticleId($code)
    {
        $query = $this->pdo->prepare("SELECT *FROM articles WHERE article_code = :code");
        $query->execute(["code"=>$code]);
        $allresult = $query->fetch(PDO::FETCH_ASSOC);
        return new Article($allresult);
    }

    public function findArticleType($category)
    {
        $query = $this->pdo->prepare("SELECT category_hierarchy FROM category WHERE category_name = :category");
        $query->execute(["category"=>$category]);
        $allresult = $query->fetch(PDO::FETCH_ASSOC);
        return $article_category = $allresult['category_hierarchy'];
    }

    public function findArticleBySize($code, $size)
    {
        $query = $this->pdo->prepare("SELECT * FROM article_stock INNER JOIN articles ON articles.id = article_stock.article_id WHERE article_stock.article_code = :code AND `article_size` = :article_size AND articles.id = article_stock.article_id");
        $query->execute(["code"=>$code, "article_size"=>$size]);
        $allresult = $query->fetch(PDO::FETCH_ASSOC);
        return new Article($allresult);
    }

    public function stockUpdate($stock, $code, $size)
    {
        $query = $this->pdo->prepare("UPDATE article_stock SET stock=:stock WHERE article_size=:article_size AND article_code=:article_code ");
        $query->execute(["stock" => $stock, "article_code" => $code, "article_size" => $size]);
    }

	public function getCategories()
	{
		$this->connectdb();
		$query = $this->pdo->prepare("SELECT category_name FROM articles GROUP BY category_name");
		$query->execute();
		$categories = $query->fetchAll();
		$this->dbclose();
		return $categories;
	}
    public function getCategory()
    {
        $query = $this->pdo->prepare("SELECT `category_name` FROM `category`");
        $query->execute();
        return $allresult_category = $query->fetchAll();
    }

	public function getColors()
	{
		$this->connectdb();
		$query = $this->pdo->prepare("SELECT color_name as article_color, hex FROM color");
		$query->execute();
		$categories = $query->fetchAll();
		$this->dbclose();
		return $categories;
	}
    public function checkCategory($category_name)
    {
        $query = $this->pdo->prepare("SELECT `category_name` FROM `category` WHERE category_name=:category_name");
        $query->execute(["category_name"=>$category_name]);
        return $allresult_category = $query->fetchAll();
    }

	public function getFabrics()
	{
		$this->connectdb();
		$query = $this->pdo->prepare("SELECT article_fabric FROM articles GROUP BY article_fabric");
		$query->execute();
		$categories = $query->fetchAll();
		$this->dbclose();
		return $categories;
	}

	public function findArticleBySearch($query)
	{
		$products = [];
		$this->connectdb();
		$query = $this->pdo->prepare($query);
		$query->execute();
		$res = $query->fetchAll();
		$this->dbclose();
		foreach ($res as $product) {
			$products[] = new Article($product);
		}
		return $products;
	}

	public function findArticleByCategory($category)
	{
		$products = [];
		$this->connectdb();
		$query = $this->pdo->prepare("SELECT * FROM articles WHERE category_name=:category");
		$query->execute(['category' => $category]);
		$res = $query->fetchAll();
		$this->dbclose();
		foreach ($res as $product) {
			$products[] = new Article($product);
		}
		return $products;
	}

    public function addCategory($category_name, $category_hierarchy)
    {
        $query = $this->pdo->prepare("INSERT INTO category(category_name, category_hierarchy) VALUES (:category_name, :category_hierarchy)");
        $query->execute(["category_name"=>$category_name , "category_hierarchy"=>$category_hierarchy]);
    }

	public function findAltArticles($id, $category)
	{
		$products = [];
		$this->connectdb();
		$query = $this->pdo->prepare("SELECT * FROM articles WHERE category_name=:category AND id != :id LIMIT 6");
		$query->execute(['category' => $category, 'id' => $id]);
		$res = $query->fetchAll();
		$this->dbclose();
		foreach ($res as $product) {
			$products[] = new Article($product);
		}
		return $products;
	}

	public function getSoldes()
	{
		$now = new DateTime();
		$now = $now->format("Y-m-d");
		$products = [];
		$this->connectdb();
		$query = $this->pdo->prepare("SELECT * FROM articles INNER JOIN article_sale ON articles.id = article_sale.article_id WHERE start_date < :now AND :now < end_date");
		$query->execute(['now' => $now]);
		$res = $query->fetchAll();
		$this->dbclose();
		foreach ($res as $product) {
			$products[] = new Article($product);
		}
		return $products;
	}

	public function getNewProducts()
	{
		$week = new DateTime();
		$week->modify('-7 day');
		$week = $week->format("Y-m-d");
		$products = [];
		$this->connectdb();
		$query = $this->pdo->prepare("SELECT * FROM articles WHERE date_added > :week ");
		$query->execute(['week' => $week]);
		$res = $query->fetchAll();
		$this->dbclose();
		foreach ($res as $product) {
			$products[] = new Article($product);
		}
		return $products;
	}

	public function getBestSells()
	{
		$products = [];
		$this->connectdb();
		$query = $this->pdo->prepare("SELECT * FROM articles INNER JOIN (SELECT article_id, pcs FROM (SELECT article_id, SUM(nb_pcs) as pcs FROM orders_details GROUP BY article_id ) as t ORDER BY pcs DESC) as x WHERE articles.article_code = x.article_id");
		$query->execute();
		$res = $query->fetchAll();
		$this->dbclose();
		foreach ($res as $product) {
			$products[] = new Article($product);
		}
		return $products;
	}

	public function getSizes($id)
	{
		$products = [];
		$this->connectdb();
		$query = $this->pdo->prepare("SELECT * FROM article_stock WHERE article_id = :id");
		$query->execute(['id' => $id]);
		$res = $query->fetchAll();
		$this->dbclose();
		foreach ($res as $product) {
			$products[] = new Article($product);
		}
		return $products;
	}



}
