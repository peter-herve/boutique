<?php

/**
 *
 */
class Inscription extends Routeur
{
    public $errors=[];
    public $success=[];

    function __construct()
    {
        if(isset($_POST['submit']))
        {
            $this->login = htmlspecialchars($_POST['login']);
            $this->sexe = htmlspecialchars($_POST['sexe']);
            $this->prenom = htmlspecialchars($_POST['prenom']);
            $this->nom = htmlspecialchars($_POST['nom']);
            $this->adress = htmlspecialchars($_POST['adress']);
            $this->city = htmlspecialchars($_POST['city']);
            $this->zip_code = htmlspecialchars($_POST['zip_code']);
            $this->email = htmlspecialchars($_POST['email']);
            $this->password = htmlspecialchars($_POST['password']);
            $this->top_size = htmlspecialchars($_POST['top_size']);
            $this->bottom_size = htmlspecialchars($_POST['bottom_size']);
            //var_dump($this->prenom);
            //var_dump(empty($this->bottom_size));

            if ($this->checkInfoConnexion($this->login, $this->sexe,$this->prenom,$this->nom,$this->adress,$this->city,$this->zip_code,$this->email,$this->password,$this->top_size,$this->bottom_size)==true)
            {
                $model = new UserModel();
                $model->connectdb();
                $model->getAllinfos($this->login);
                $model->getAllinfosmail($this->email);
                if (empty($model->allresult) and empty($model->allresultmail))
                {
                    $model->register($this->login, $this->prenom, $this->nom, $this->email, $this->password, $this->adress, $this->zip_code, $this->city, $this->sexe, $this->top_size, $this->bottom_size);
                    $model->getAllinfos($this->login);
                    $this->success['register'] = true;
                    $user = new User($model->allresult);
                    $model->dbclose();

                } else $this->errors['user_exists'] = true;
            } else $this->errors['field_empty']=true;
        }
        //var_dump($this->errors);
        //var_dump($this->success);
        // $view = new View('Inscription');
        // $view->render();

		// Formulaire de connexion simple
		$this->pagetitle = "Inscription";
		$this->css = "inscription.css";
		ob_start();
		include (VIEW.'user/inscription.php');
		$this->html[] = ob_get_clean();
		// On genère la vue
		$view = new View($this->getPageTitle(), $this->getCss());
		$view->sendMain($this->getHtml());
		$view->render();
    }

    public function checkInfoConnexion($login, $sexe, $prenom, $nom, $adress, $city, $zipcode, $email, $password, $top_size, $bottom_size)
    {

        if (empty(trim($login)) || empty(trim($email)) || empty(trim($sexe))|| empty(trim($prenom))|| empty(trim($nom))|| empty(trim($adress)) || empty(trim($city))|| empty(trim($zipcode))|| empty(trim($email)) || empty(trim($password))|| empty(trim($top_size)) || empty(trim($bottom_size)))
        {
            return false;
        }  else return true;

    }



}
