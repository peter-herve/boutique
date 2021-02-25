<?php

class ProductModel extends Request {



    public function addProducttop($type, $category,$name,$description,$color,$fabric,$price,$code)
    {
        $query = $this->pdo->prepare("INSERT INTO `articles`(type, category_name, article_name, article_description, article_color, article_fabric, article_price, article_size, date_added, article_code)  VALUES (:type, :category, :nom, :description, :color, :fabric, :price, 'S',  NOW(), :code)");
        $query->execute(['type'=> $type, 'category' => $category, "nom"=>$name, "description"=>$description, "color"=>$color, "fabric"=>$fabric, "price"=>$price, "code"=>$code]);
        $query = $this->pdo->prepare("INSERT INTO `articles`(type, category_name, article_name, article_description, article_color, article_fabric, article_price, article_size, date_added, article_code)  VALUES (:type, :category, :nom, :description, :color, :fabric, :price, 'M',  NOW(), :code)");
        $query->execute(['type'=> $type, 'category' => $category, "nom"=>$name, "description"=>$description, "color"=>$color, "fabric"=>$fabric, "price"=>$price, "code"=>$code]);
        $query = $this->pdo->prepare("INSERT INTO `articles`(type, category_name, article_name, article_description, article_color, article_fabric, article_price, article_size, date_added, article_code)  VALUES (:type, :category, :nom, :description, :color, :fabric, :price, 'L',  NOW(), :code)");
        $query->execute(['type'=> $type, 'category' => $category, "nom"=>$name, "description"=>$description, "color"=>$color, "fabric"=>$fabric, "price"=>$price, "code"=>$code]);
        $query = $this->pdo->prepare("INSERT INTO `articles`(type, category_name, article_name, article_description, article_color, article_fabric, article_price, article_size, date_added, article_code)  VALUES (:type, :category, :nom, :description, :color, :fabric, :price, 'XL',  NOW(), :code)");
        $query->execute(['type'=> $type, 'category' => $category, "nom"=>$name, "description"=>$description, "color"=>$color, "fabric"=>$fabric, "price"=>$price, "code"=>$code]);
        $query = $this->pdo->prepare("INSERT INTO `articles`(type, category_name, article_name, article_description, article_color, article_fabric, article_price, article_size, date_added, article_code)  VALUES (:type, :category, :nom, :description, :color, :fabric, :price, 'XXL',  NOW(), :code)");
        $query->execute(['type'=> $type, 'category' => $category, "nom"=>$name, "description"=>$description, "color"=>$color, "fabric"=>$fabric, "price"=>$price, "code"=>$code]);
    }
    public function addProductbottom($type, $category,$name,$description,$color,$fabric,$price,$code)
    {
        $query = $this->pdo->prepare("INSERT INTO `articles`(type, category_name, article_name, article_description, article_color, article_fabric, article_price, article_size, date_added, article_code)  VALUES (:type, :category, :nom, :description, :color, :fabric, :price, '36',  NOW(), :code)");
        $query->execute(['type'=> $type, 'category' => $category, "nom" => $name, "description" => $description, "color" => $color, "fabric" => $fabric, "price" => $price, "code" => $code]);
        $query = $this->pdo->prepare("INSERT INTO `articles`(type, category_name, article_name, article_description, article_color, article_fabric, article_price, article_size, date_added, article_code)  VALUES (:type, :category, :nom, :description, :color, :fabric, :price, '38',  NOW(), :code)");
        $query->execute(['type'=> $type, 'category' => $category, "nom" => $name, "description" => $description, "color" => $color, "fabric" => $fabric, "price" => $price, "code" => $code]);
        $query = $this->pdo->prepare("INSERT INTO `articles`(type, category_name, article_name, article_description, article_color, article_fabric, article_price, article_size, date_added, article_code)  VALUES (:type, :category, :nom, :description, :color, :fabric, :price, '40',  NOW(), :code)");
        $query->execute(['type'=> $type, 'category' => $category, "nom" => $name, "description" => $description, "color" => $color, "fabric" => $fabric, "price" => $price, "code" => $code]);
        $query = $this->pdo->prepare("INSERT INTO `articles`(type, category_name, article_name, article_description, article_color, article_fabric, article_price, article_size, date_added, article_code)  VALUES (:type, :category, :nom, :description, :color, :fabric, :price, '42',  NOW(), :code)");
        $query->execute(['type'=> $type, 'category' => $category, "nom" => $name, "description" => $description, "color" => $color, "fabric" => $fabric, "price" => $price, "code" => $code]);
        $query = $this->pdo->prepare("INSERT INTO `articles`(type, category_name, article_name, article_description, article_color, article_fabric, article_price, article_size, date_added, article_code)  VALUES (:type, :category, :nom, :description, :color, :fabric, :price, '44',  NOW(), :code)");
        $query->execute(['type'=> $type, 'category' => $category, "nom" => $name, "description" => $description, "color" => $color, "fabric" => $fabric, "price" => $price, "code" => $code]);
        $query = $this->pdo->prepare("INSERT INTO `articles`(type, category_name, article_name, article_description, article_color, article_fabric, article_price, article_size, date_added, article_code)  VALUES (:type, :category, :nom, :description, :color, :fabric, :price, '46',  NOW(), :code)");
        $query->execute(['type'=> $type, 'category' => $category, "nom" => $name, "description" => $description, "color" => $color, "fabric" => $fabric, "price" => $price, "code" => $code]);
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



}
