<?php

class Order{

    public $main = [];
    public $html;

    public $pagetitle = "Commande";
    public $css = "shop/shopmodele.css";

    public function __construct()
    {
        if (!empty($_GET['code']))
        {
            $code = $_GET['code'];
            $quantity = $_GET['qty'];
            $price = $_GET['price'];
            $this->order[0] = [$code, $quantity, $price];

            if  (isset($_COOKIE['basket']))
            {
                $this->order_total=[];
                $this->basket = $this->cookieToArray();
                $this->order_total=array_merge($this->basket, $this->order);
            }
        }
       else if (empty($_GET['code']))
        {
            $this->order_total = $this->cookieToArray();
        }

        ob_start();
        include (VIEW.'shop/order.php');
        $this->html[] = ob_get_clean();
        $view = new View($this->pagetitle, $this->css);
        $view->sendMain($this->html);
        $view->render();
    }

    public function cookieToArray()
    {
        $cookie_value = explode( "/", $_COOKIE['basket']);
        $this->cookie_array = [];
        for ($i=0; isset($cookie_value[$i]); $i++)
        {
            array_push($this->cookie_array, explode("-", $cookie_value[$i]));
        }
        return $this->cookie_array;
    }
}
