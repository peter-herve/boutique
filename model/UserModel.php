<?php

Class UserModel extends Request
{

    public function countLogin($login)
    {
        $query = $this->pdo->prepare("SELECT COUNT(id) from users WHERE login=:login");
        $query->execute(["login" => $login]);
        return $this->allresult_count_login = $query->fetchColumn();
    }

    public function countEmail($email)
    {
        $query = $this->pdo->prepare("SELECT COUNT(id) from users WHERE email=:email");
        $query->execute(["email" => $email]);
        return $this->allresult_count_email = $query->fetchColumn();
    }

    public function getUserPassword($login)
    {
        $query = $this->pdo->prepare("SELECT password from users WHERE login=:login");
        $query->execute(["login" => $login]);
        $this->allresult_password = $query->fetchAll();
        return $this->allresult_password[0][0];
    }

    public function getAllinfos($login)
    {
        $query = $this->pdo->prepare("SELECT * from users WHERE login=:login");
        $query->execute(["login"=>$login]);
        //return $this->allresult = $query->fetchAll();
		return new User($query->fetchAll());
    }

    public function getAllinfosmail($email)
    {
        $query = $this->pdo->prepare("SELECT * from users WHERE email=:email");
        $query->execute(["email" => $email]);
        $this->allresultmail = $query->fetchAll();
    }

    public function register($login, $prenom, $nom, $email, $password, $adress, $zipcode, $city, $sexe, $top_size, $bottom_size)
    {
        $query = $this->pdo->prepare("INSERT INTO `users`(login, prenom, nom, email, password, adress, zip_code, city, sexe, top_size, bottom_size, created_at) VALUES (:login, :prenom, :nom, :email, :password, :adress, :zip_code, :city, :sexe, :top_size, :bottom_size, NOW())");
        $password = password_hash($password, PASSWORD_BCRYPT);
        $query->execute(['login' => $login, "prenom" => $prenom, "nom" => $nom, "email" => $email, "password" => $password, "adress" => $adress, "zip_code" => $zipcode, "city" => $city, "sexe" => $sexe, "top_size" => $top_size, "bottom_size" => $bottom_size]);
    }

    public function update($login, $prenom, $nom, $email, $password, $adress, $zipcode, $city, $sexe, $top_size, $bottom_size, $id)
    {
        $query = $this->pdo->prepare("UPDATE `users` SET `login`= :login,`prenom`= :prenom,`nom`= :nom,`email`= :email,`adress`= :adress,`zip_code`= :zip_code,`city`= :city,`sexe`= :sexe,`top_size`= :top_size ,`bottom_size`= :bottom_size WHERE id='$id'");
        $password = password_hash($password, PASSWORD_BCRYPT);
        $query->execute(['login' => $login, "prenom" => $prenom, "nom" => $nom, "email" => $email, "adress" => $adress, "zip_code" => $zipcode, "city" => $city, "sexe" => $sexe, "top_size" => $top_size, "bottom_size" => $bottom_size]);
    }

    public function updatePassword($password)
    {
        $id = $_SESSION['user']['id'];
        $query = $this->pdo->prepare("UPDATE `users` SET `password`=:password WHERE id='$id'");
        $password = password_hash($password, PASSWORD_BCRYPT);
        $query->execute(['password' => $password]);
    }

    public function updateLastco($login)
    {
        $query = $this->pdo->prepare("UPDATE `users` SET last_connexion=NOW() WHERE login=:login");
        $query->execute(["login" => $login]);
    }

    public function searchUseradmin($id, $login, $prenom, $nom, $email, $adress)
    {
        $query = $this->pdo->prepare("SELECT `id`, `login`, `prenom`, `nom`, `email`, `adress`, `zip_code`, `city`, `sexe`, `top_size`, `bottom_size`, `created_at`, `last_connexion`, `user_confirm` from users WHERE `id` LIKE :id OR `login` LIKE :login OR `prenom` LIKE :prenom OR `nom` LIKE :nom OR `email` LIKE :email OR `adress` LIKE :adress");
        $query->execute(['id' => $id, 'login' => $login, "prenom" => $prenom, "nom" => $nom, "email" => $email, "adress" => $adress]);
        return $this->allresult_user = $query->fetch(PDO::FETCH_ASSOC);
    }

    public function searchUseradminbyid($id)
    {
        $query = $this->pdo->prepare("SELECT `id`, `login`, `prenom`, `nom`, `email`, `adress`, `zip_code`, `city`, `sexe`, `top_size`, `bottom_size`, `created_at`, `last_connexion`, `user_confirm` from users WHERE `id`=:id");
        $query->execute(['id' => $id]);
        return $this->allresult_user = $query->fetch(PDO::FETCH_ASSOC);
    }

	public function getUserNameById($id)
	{
		$this->connectdb();
		$query = $this->pdo->prepare("SELECT login FROM users WHERE id = :id");
		$query->execute(['id'=> $id]);
		$user = $query->fetchAll();
		$this->dbclose();
		return $user[0]['login'];
	}



}
