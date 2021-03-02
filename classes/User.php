<?php

Class User extends UserModel {

    public $login;
    private $id;
    private $nom;
    private $email;
    private $adress;
    private $zip_code;
    private $city;
    private $sexe;
    private $creation;
    private $last_co;
	private $password;
	private $prenom;
	private $top_size;
	private $bottom_size;
	private $admin;

    public function __construct($tab)
    {
            $this->login 		= $tab[0]['login'];
            $this->id 			= $tab[0]['id'];
            $this->top_size 	= $tab[0]['top_size'];
            $this->bottom_size 	= $tab[0]['bottom_size'];
            $this->prenom		= $tab[0]['prenom'];
            $this->nom 			= $tab[0]['nom'];
            $this->email 		= $tab[0]['email'];
            $this->adress 		= $tab[0]['adress'];
            $this->zip_code 	= $tab[0]['zip_code'];
            $this->city 		= $tab[0]['city'];
            $this->sexe 		= $tab[0]['sexe'];
            $this->creation 	= $tab[0]['created_at'];
            $this->last_co 		= $tab[0]['last_connexion'];
			$this->password 	= $tab[0]['password'];
			$this->admin 		= $tab[0]['admin'];
            //var_dump($_SESSION['user']['login']);
            //////// Ajouter size et login dans BDD /////
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
        //$_SESSION['user']['login'] = $this->login;
    }
    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
        //$_SESSION['user']['nom'] = $this->login;
    }
    /**
     * @param mixed $sexe
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
        //$_SESSION['nom']['sexe'] = $this->sexe;
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
        //$_SESSION['nom']['email'] = $this->email;
    }
    /**
     * @param mixed $adress
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;
        //$_SESSION['nom']['adress'] = $this->adresse;
    }
    /**
     * @param mixed $zip_code
     */
    public function setZipCode($zip_code)
    {
        $this->zip_code = $zip_code;
        //$_SESSION['nom']['zip_code'] = $this->zip_code;
    }
    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
        //$_SESSION['nom']['city'] = $this->city;
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

	public function getId()
	{
		return $this->id;
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
    // public function getSize()
    // {
    //     return $this->size;
    // }
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

	public function getPassword()
	{
		return $this->password;
	}

	public function getPrenom()
	{
		return $this->prenom;
	}

	public function getTopSize()
	{
		return $this->top_size;
	}

	public function getBottomSize()
	{
		return $this->bottom_size;
	}

	public function isAdmin()
	{
		if ($this->admin == 1) {
			return True;
		}else {
			return False;
		}
	}

}







?>
