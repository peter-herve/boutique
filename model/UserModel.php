<?php

Class UserModel extends Request
{

    public function countLogin($login)
    {
        $query = $this->pdo->prepare("SELECT COUNT(id) from users WHERE login=:login");
        $query->execute(["login"=>$login]);
        return $this->allresult_count_login=$query->fetchColumn();
    }

    public function countEmail($email)
    {
        $query = $this->pdo->prepare("SELECT COUNT(id) from users WHERE email=:email");
        $query->execute(["email"=>$email]);
        return $this->allresult_count_email=$query->fetchColumn();
    }

    public function getPassword($login)
    {
        $query = $this->pdo->prepare("SELECT password from users WHERE login=:login");
        $query->execute(["login"=>$login]);
        $this->allresult_password=$query->fetchAll();
        return $this->allresult_password[0][0];
    }

    public function getAllinfos($login)
    {
        $query = $this->pdo->prepare("SELECT * from users WHERE login=:login");
        $query->execute(["login"=>$login]);
        $this->allresult=$query->fetchAll();
    }

    public function getAllinfosmail($email)
    {
        $query = $this->pdo->prepare("SELECT * from users WHERE email=:email");
        $query->execute(["email"=>$email]);
        $this->allresultmail=$query->fetchAll();
    }

    public function register($login, $prenom, $nom ,$email, $password, $adress, $zipcode, $city, $sexe, $top_size, $bottom_size)
    {
        $requete = $this->pdo->prepare("INSERT INTO `users`(login, prenom, nom, email, password, adress, zip_code, city, sexe, top_size, bottom_size, created_at) VALUES (:login, :prenom, :nom, :email, :password, :adress, :zip_code, :city, :sexe, :top_size, :bottom_size, NOW())");
        $password = password_hash($password, PASSWORD_BCRYPT);
        $requete->execute(['login' => $login, "prenom"=>$prenom, "nom"=>$nom, "email"=>$email, "password"=>$password, "adress"=>$adress, "zip_code"=>$zipcode, "city"=>$city, "sexe" => $sexe, "top_size"=>$top_size, "bottom_size"=>$bottom_size ]);
    }

    public function update($login, $prenom, $nom ,$email, $password, $adress, $zipcode, $city, $sexe, $top_size, $bottom_size,$id)
    {
        $requete = $this->pdo->prepare("UPDATE `users` SET `login`= :login,`prenom`= :prenom,`nom`= :nom,`email`= :email,`adress`= :adress,`zip_code`= :zip_code,`city`= :city,`sexe`= :sexe,`top_size`= :top_size ,`bottom_size`= :bottom_size WHERE id='$id'");
        $password = password_hash($password, PASSWORD_BCRYPT);
        $requete->execute(['login' => $login, "prenom"=>$prenom, "nom"=>$nom, "email"=>$email, "adress"=>$adress, "zip_code"=>$zipcode, "city"=>$city, "sexe" => $sexe, "top_size"=>$top_size, "bottom_size"=>$bottom_size]);
    }

    public function updatePassword($password)
    {
        $id = $_SESSION['user']['id'];
        $requete = $this->pdo->prepare("UPDATE `users` SET `password`=:password WHERE id='$id'");
        $password = password_hash($password, PASSWORD_BCRYPT);
        $requete->execute(['password' => $password]);
    }

    public function updateLastco()
    {
        $id = $_SESSION['user']['id'];
        $requete = $this->pdo->prepare("UPDATE `users` SET `last_connexion`=NOW() WHERE id='$id'");
        $requete=execute();
    }




}