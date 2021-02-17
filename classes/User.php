<?php

Class User extends UserModel {

    public $login;
    private $id;
    private $nom;
    private $email;
    private $adresse;
    private $zip_code;
    private $city;
    private $sexe;
    private $creation;
    private $last_co;

    public function __construct($tab)
    {
            $_SESSION['user']['login'] = $this->login = $tab[0]['login'];
            $_SESSION['user']['id'] = $this->id = $tab[0]['id'];
            $_SESSION['user']['top_size'] = $this->id = $tab[0]['top_size'];
            $_SESSION['user']['bottom_size'] = $this->id = $tab[0]['bottom_size'];
            $_SESSION['user']['prenom'] = $this->login = $tab[0]['prenom'];
            $_SESSION['user']['nom'] = $this->login = $tab[0]['nom'];
            $_SESSION['user']['email'] = $this->email = $tab[0]['email'];
            $_SESSION['user']['adress'] = $this->adresse = $tab[0]['adress'];
            $_SESSION['user']['zip_code'] = $this->zip_code = $tab[0]['zip_code'];
            $_SESSION['user']['city'] = $this->city = $tab[0]['city'];
            $_SESSION['user']['sexe'] = $this->sexe = $tab[0]['sexe'];
            $_SESSION['user']['creation'] = $this->creation = $tab[0]['created_at'];
            $_SESSION['user']['last_co'] =$this->last_co = $tab[0]['last_connexion'];
            var_dump($_SESSION['user']);
            var_dump($_SESSION['user']['login']);
            //////// Ajouter size et login dans BDD /////
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
        $_SESSION['user']['login'] = $this->login;
    }
    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
        $_SESSION['user']['nom'] = $this->login;
    }
    /**
     * @param mixed $sexe
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
        $_SESSION['nom']['sexe'] = $this->sexe;
    }
    /**
     * @param mixed $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }
    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
        $_SESSION['nom']['email'] = $this->email;
    }
    /**
     * @param mixed $adress
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;
        $_SESSION['nom']['adress'] = $this->adresse;
    }
    /**
     * @param mixed $zip_code
     */
    public function setZipCode($zip_code)
    {
        $this->zip_code = $zip_code;
        $_SESSION['nom']['zip_code'] = $this->zip_code;
    }
    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
        $_SESSION['nom']['city'] = $this->city;
    }
    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }
    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * @return mixed
     */
    public function getAdress()
    {
        return $this->adress;
    }
    /**
     * @return mixed
     */
    public function getSexe()
    {
        return $this->sexe;
    }
    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }
    /**
     * @return mixed
     */
    public function getZipCode()
    {
        return $this->zip_code;
    }
    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }
}







?>
