<?php

class Order{

    public $main = [];
    public $html;

    public $pagetitle = "Commande";
    public $css = "shop/shopmodele.css";

    public function __construct()
    {
        $code = $_GET['code'];
        $quantity = $_GET['qty'];
        $price = $_GET['price'];
        if(isset($_COOKIE['basket']))
        {
            if (isset($_GET))
            {
                $this->order[0] = [$code, $quantity, $price];
            }
            $this->order_total=[];
            $this->basket = $this->cookieToArray();
            $this->order_total=array_merge($this->basket, $this->order);
        }
        else
        {
            $this->order_total[0] = [$code, $quantity, $price];
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
