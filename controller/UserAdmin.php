<?php

class UserAdmin extends Routeur {




    public function __construct()
    {

    if (isset($_POST['search_user'])) {
        $this->id = htmlspecialchars($_POST['id']);
        $this->login = htmlspecialchars($_POST['login']);
        $this->prenom = htmlspecialchars($_POST['prenom']);
        $this->nom = htmlspecialchars($_POST['nom']);
        $this->email = htmlspecialchars($_POST['email']);
        $this->adress = htmlspecialchars($_POST['adress']);

        $user_data = new UserModel();
        $user_data->connectdb();
        $view = new View('user_details');
		$view->sendData($user_data->searchUseradmin($this->id, $this->login, $this->prenom, $this->nom, $this->email, $this->adress));
		$view->sendData(["id"=>2, "login"=>'peter']);
		$view->render();
        $this->forEachuserinfo($user_data->searchUseradmin($this->id, $this->login, $this->prenom, $this->nom, $this->email, $this->adress));
    }

        if (isset($_POST['search_order'])) {
            $this->id = htmlspecialchars($_POST['order_number']);

            $user_data = new UserModel();
            $user_data->connectdb();
            $view = new View('user_details');
            $view->render();
            $this->forEachuserinfo($user_data->searchOrderadmin($this->id));
        }
    $view = new View('admin');
    $view->render();

    }

    public function forEachuserinfo($data)
    {
        foreach ($data as $key=>$value)
        {
            echo $key . ": " . $value . "<br>";
        }
    }

}
