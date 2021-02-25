<?php

/**
 *
 */
class Connexion extends Routeur
{
    public $login;
    public $password;
    public $id;
    public $email;
    public $errors;
    public $success;
    private $user;



	function __construct()
    {
        if (isset($_POST['submit'])) {
            if ($this->connectUser() == true) {
                //header('Location: home');
                var_dump($_SESSION['user']);
            } else {
                echo "connection failed";
            }

        }
        var_dump($this->errors);
        var_dump($this->success);
        $view = new View('Connexion');
        $view->sendData($this->errors);
        $view->render();
    }

    public function connectUser()
    {
        //protection login et mot de passe
        $this->login = htmlspecialchars($_POST['login']);
        $this->password = htmlspecialchars($_POST['password']);
        //check info completée
        if ($this->checkInfoConnexion($this->login, $this->password) == true) {
            $model = new UserModel();
            $model->connectdb();
            //$user_info = $model->getAllinfos($this->login);
            if (!empty($model->getAllinfos($this->login)))
            {
                $user_info = new User($model->allresult);
                $bdd_password = $user_info->getPassword();
                //Check password
                if($this->checkPassword($this->password,$bdd_password)==true)
                {
                    //$_SESSION['user'] = new User($model->allresult);
                    $model->updateLastco($this->login);
                    $_SESSION['user'] = $model->getAllinfos($this->login);
                    $model->dbclose();
                    $this->success['connexion']=true;
                    return true;
                    // Connexion, création de l'objet user et des variables de session
                } else $this->errors['incorrect_password']=true;
                return false;
            }else $this->errors['login_unknown']=true;
            return false;
        }
    }



    /**
     * @return mixed
     */
    public function checkUser()
    {
        if (get_class($this->user)){
          return true;
        }
        return false;
    }

    public function checkInfoConnexion($login, $password) // vérification que les infos de connexions sont bien repmplies
    {
        if (empty(trim($login)) || empty(trim($password))) {
            //Vérifie si l'un des champs est vide
            if (empty(trim($login))) {
                $this->errors['login_empty'] = true;
                //Si c'est le login => message erreur
            }
            if (empty(trim($password))) {
                $this->errors['password_empty'] = true;
                //Si c'est le login => message erreur
            }
            return false;
        } else return true;
    }


    public function checkPassword($password,$cpassword) // Vérifie que le mot de passe correspond à celui en bdd
    {
        if (password_verify($password, $cpassword)==true)
        {
            return true;
        } else
            return false;
    }



}
