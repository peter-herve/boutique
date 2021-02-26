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
        $query = $this->pdo->prepare("SELECT * FROM articles WHERE article_code = :code");
        $query->execute(["code"=>$code]);
        return $allresult_stock = $query->fetchAll();
    }

    public function findArticleStock($code)
    {
        $query = $this->pdo->prepare("SELECT * FROM article_stock WHERE article_code = :code");
        $query->execute(["code"=>$code]);
        return $allresult_stock = $query->fetchAll();
    }

    public function findArticleId($code)
    {
        $query = $this->pdo->prepare("SELECT id FROM articles WHERE article_code = :code");
        $query->execute(["code"=>$code]);
        $allresult = $query->fetch(PDO::FETCH_ASSOC);
        return $article_id = $allresult['id'];
    }

    public function findArticleType($category)
    {
        $query = $this->pdo->prepare("SELECT category_hierarchy FROM category WHERE category_name = :category");
        $query->execute(["category"=>$category]);
        $allresult = $query->fetch(PDO::FETCH_ASSOC);
        return $article_category = $allresult['category_hierarchy'];
    }



}
