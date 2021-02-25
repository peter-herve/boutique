<?php

class ProductModel extends Request {


    public function addProducttop($category,$name,$description,$color,$fabric,$price,$code)
    {
        $requete = $this->pdo->prepare("INSERT INTO `articles`(category_name, article_name, article_description, article_color, article_fabric, article_price, article_size, date_added, article_code) VALUES (:category, :nom, :description, :color, :fabric, :price, 'S',  NOW(), :code)");
        $requete->execute(['category' => $category, "nom"=>$name, "description"=>$description, "color"=>$color, "fabric"=>$fabric, "price"=>$price, "code"=>$code]);
        $requete = $this->pdo->prepare("INSERT INTO `articles`(category_name, article_name, article_description, article_color, article_fabric, article_price, article_size, date_added, article_code) VALUES (:category, :nom, :description, :color, :fabric, :price, 'M',  NOW(), :code)");
        $requete->execute(['category' => $category, "nom"=>$name, "description"=>$description, "color"=>$color, "fabric"=>$fabric, "price"=>$price, "code"=>$code]);
        $requete = $this->pdo->prepare("INSERT INTO `articles`(category_name, article_name, article_description, article_color, article_fabric, article_price, article_size, date_added, article_code) VALUES (:category, :nom, :description, :color, :fabric, :price, 'L',  NOW(), :code)");
        $requete->execute(['category' => $category, "nom"=>$name, "description"=>$description, "color"=>$color, "fabric"=>$fabric, "price"=>$price, "code"=>$code]);
        $requete = $this->pdo->prepare("INSERT INTO `articles`(category_name, article_name, article_description, article_color, article_fabric, article_price, article_size, date_added, article_code) VALUES (:category, :nom, :description, :color, :fabric, :price, 'XL',  NOW(), :code)");
        $requete->execute(['category' => $category, "nom"=>$name, "description"=>$description, "color"=>$color, "fabric"=>$fabric, "price"=>$price, "code"=>$code]);
        $requete = $this->pdo->prepare("INSERT INTO `articles`(category_name, article_name, article_description, article_color, article_fabric, article_price, article_size, date_added, article_code) VALUES (:category, :nom, :description, :color, :fabric, :price, 'XXL',  NOW(), :code)");
        $requete->execute(['category' => $category, "nom"=>$name, "description"=>$description, "color"=>$color, "fabric"=>$fabric, "price"=>$price, "code"=>$code]);
    }
    public function addProductbottom($category,$name,$description,$color,$fabric,$price,$code)
    {
        $requete = $this->pdo->prepare("INSERT INTO `articles`(category_name, article_name, article_description, article_color, article_fabric, article_price, article_size, date_added, article_code) VALUES (:category, :nom, :description, :color, :fabric, :price, '36',  NOW(), :code)");
        $requete->execute(['category' => $category, "nom"=>$name, "description"=>$description, "color"=>$color, "fabric"=>$fabric, "price"=>$price, "code"=>$code]);
        $requete = $this->pdo->prepare("INSERT INTO `articles`(category_name, article_name, article_description, article_color, article_fabric, article_price, article_size, date_added, article_code) VALUES (:category, :nom, :description, :color, :fabric, :price, '38',  NOW(), :code)");
        $requete->execute(['category' => $category, "nom"=>$name, "description"=>$description, "color"=>$color, "fabric"=>$fabric, "price"=>$price, "code"=>$code]);
        $requete = $this->pdo->prepare("INSERT INTO `articles`(category_name, article_name, article_description, article_color, article_fabric, article_price, article_size, date_added, article_code) VALUES (:category, :nom, :description, :color, :fabric, :price, '40',  NOW(), :code)");
        $requete->execute(['category' => $category, "nom"=>$name, "description"=>$description, "color"=>$color, "fabric"=>$fabric, "price"=>$price, "code"=>$code]);
        $requete = $this->pdo->prepare("INSERT INTO `articles`(category_name, article_name, article_description, article_color, article_fabric, article_price, article_size, date_added, article_code) VALUES (:category, :nom, :description, :color, :fabric, :price, '42',  NOW(), :code)");
        $requete->execute(['category' => $category, "nom"=>$name, "description"=>$description, "color"=>$color, "fabric"=>$fabric, "price"=>$price, "code"=>$code]);
        $requete = $this->pdo->prepare("INSERT INTO `articles`(category_name, article_name, article_description, article_color, article_fabric, article_price, article_size, date_added, article_code) VALUES (:category, :nom, :description, :color, :fabric, :price, '44',  NOW(), :code)");
        $requete->execute(['category' => $category, "nom"=>$name, "description"=>$description, "color"=>$color, "fabric"=>$fabric, "price"=>$price, "code"=>$code]);
        $requete = $this->pdo->prepare("INSERT INTO `articles`(category_name, article_name, article_description, article_color, article_fabric, article_price, article_size, date_added, article_code) VALUES (:category, :nom, :description, :color, :fabric, :price, '46',  NOW(), :code)");
        $requete->execute(['category' => $category, "nom"=>$name, "description"=>$description, "color"=>$color, "fabric"=>$fabric, "price"=>$price, "code"=>$code]);
    }

    public function checkArticlecode($code)
    {
        $requete = $this->pdo->prepare("SELECT COUNT(*) FROM articles WHERE article_code = :code");
        $requete->execute(['code'=>$code]);
    }



}
