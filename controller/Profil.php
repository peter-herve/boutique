<?php
/**
 *
 */
class Profil extends Routeur
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
        $model = new UserModel();
        $model->connectdb();
        if (isset($_SESSION['user'])) {
            if (isset($_POST['submit_new_profile'])) {
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

                if ($this->checkInfoConnexion($this->login, $this->sexe, $this->prenom, $this->nom, $this->adress, $this->city, $this->zip_code, $this->email, $this->password, $this->top_size, $this->bottom_size) == true) {

                    if ($this->login == $_SESSION['user']['login'] || $model->countLogin($this->login) == 0)
                    {
                        if($this->email == $_SESSION['user']['email'] || $model->countEmail($this->email) == 0)
                        {
                            if ($this->checkPassword($this->password, $model->getPassword($_SESSION['user']['login'])) == true) {
                                $model->update($this->login, $this->prenom, $this->nom, $this->email, $this->password, $this->adress, $this->zip_code, $this->city, $this->sexe, $this->top_size, $this->bottom_size, $_SESSION['user']['id']);
                                $model->getAllinfos($this->login);
                                new User($model->allresult);
                                $this->success['update_profile'] = true;
                            } else $this->errors['wrong_password'] = true;
                        } else $this->errors['email_exists'] = true;
                    } else $this->errors['login_exists'] = true;
                } else $this->errors['field_empty'] = true;
            }

            if (isset($_POST['submit_new_pass'])) {
                $this->password = htmlspecialchars($_POST['old_password']);
                var_dump($this->password);
                $this->new_password = htmlspecialchars($_POST['new_password']);
                var_dump($this->new_password);
                $this->confirm_new_password = htmlspecialchars($_POST['confirm_new_password']);
                var_dump($this->confirm_new_password);
                $model->getPassword($_SESSION['user']['login']);
                var_dump($model->getPassword($_SESSION['user']['login']));
                if (password_verify($this->password,$model->getPassword($_SESSION['user']['login'])))
                {
                    if ($this->new_password = $this->confirm_new_password)
                    {
                        $model->updatePassword($this->new_password  );
                        $this->success['update_password'] = true;
                    } else $this->errors['different_passwords'] = true;
                }else $this->errors['wrong_password'] =true;
            }
            $model->dbclose();
            var_dump($this->errors);
            var_dump($this->success);
            $view = new View('Profil');
            $view->render();
        }
        elseif (!isset($_SESSION['user']))
        {
            $view = new View('Connexion');
            $view->render();
        }
    }

    public function checkInfoConnexion($login, $sexe, $prenom, $nom, $adress, $city, $zipcode, $email, $password, $top_size, $bottom_size)
    {

        if (!empty(trim($login)) || !empty(trim($email)) || !empty(trim($sexe))|| !empty(trim($prenom))|| !empty(trim($nom))|| !empty(trim($adress)) || !empty(trim($city))|| !empty(trim($zipcode))|| !empty(trim($email)) || !empty(trim($password))|| !empty(trim($top_size)) || !empty(trim($bottom_size)))
        {
            return true;
        }  else return false;

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
