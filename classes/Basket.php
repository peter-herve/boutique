<?php

/**
 * Used to control products in basket with cookies
 */
class Basket extends ShopArticle
{
	private $cookie_name = 'basket';
	public $cookie_value = [];
	public $code;
	public $price;
	public $quantity;

	public function __construct($code, $quantity, $price)
	{
	    $this->code = intval($code);
	    $this->quantity = intval($quantity);
	    $this->price = $price;
		// Check if a cookie already exists
		$this->getCookie();
	}

	public function getCookie()
	{
		// Stores cookie value in object
		if (isset($_COOKIE[$this->cookie_name]))
		{
		    var_dump($this->price);
            $basket = $_COOKIE[$this->cookie_name];
            unset($_COOKIE[$this->cookie_name]);
            $this->cookie_value = $basket. "/" .$this->code . "-" . $this->quantity . "-" . $this->price;
            $this->setCookie();
            if (isset($_SESSION['user']))
            {
                $this->add();
            }
            header('Location:'.URL."shop/model/".$this->code);
            echo "cookie existant";
		}
		else {
            $this->cookie_value = $this->code . "-" . $this->quantity . "-" . $this->price;
            var_dump($this->cookie_value);
            $this->setCookie();
            if (isset($_SESSION['user']))
            {
                $this->add();
            }
            header('Location:'.URL."shop/model/".$this->code);
            echo "cookie set";

        }
	}

	public function setCookie()
	{
		return setcookie($this->cookie_name, $this->cookie_value, time()+3600*24*30, "/");
	}

	public function add()
    {
        $order_data = new OrderModel();
        $order_data->connectdb();
        $user_id = intval($_SESSION['user']->getId());
        $order_data->addToBasket($user_id, $this->code, $this->quantity, $this->price);
        $order_data->dbclose();
    }
}
