<?php


class UserDetails{


    public $pagetitle = "Details de l'utilisateur";
    public $css = "admin.css";

    public function __construct()
    {
        if (isset($_POST['search_user_order']))
        {
            $this->id = htmlspecialchars($_POST['id']);
            $user_data = new UserModel();
            $user_data->connectdb();
            $data = $user_data->searchUseradminbyid($this->id);
            ob_start();
            include(VIEW . 'admin/user_details.php');
            $this->html[] = ob_get_clean();
            $view = new View($this->getPageTitle(), $this->getCss());
            $view->sendMain($this->getHtml());
            $view->render();

        }
        if (isset($_POST['search_user'])) {
            $this->id = htmlspecialchars($_POST['id']);
            $this->login = htmlspecialchars($_POST['login']);
            $this->prenom = htmlspecialchars($_POST['prenom']);
            $this->nom = htmlspecialchars($_POST['nom']);
            $this->email = htmlspecialchars($_POST['email']);
            $this->adress = htmlspecialchars($_POST['adress']);
            $user_data = new UserModel();
            $user_data->connectdb();
            $data = $user_data->searchUseradmin($this->id, $this->login, $this->prenom, $this->nom, $this->email, $this->adress);
            ob_start();
            include(VIEW . 'admin/user_details.php');
            $this->html[] = ob_get_clean();
            $view = new View($this->getPageTitle(), $this->getCss());
            $view->sendMain($this->getHtml());
            $view->render();
        }
    }

    public function forEachuserinfo($data)
    {
        foreach ($data as $key=>$value)
        {
            echo $key . ": " . $value . "<br>";
        }
    }

    public function getHtml()
    {
        return $this->html;
    }

    public function getPageTitle()
    {
        return $this->pagetitle;
    }

    public function getCss()
    {
        return $this->css;
    }


}
