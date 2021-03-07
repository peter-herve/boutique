<?php

/**
 * Used to control products in basket with cookies
 */
class Basket extends ShopModel
{
	private $cookie_name = 'basket';
	public $cookie_value = [];
	public $code;
	public $quantity;
	public $cookie_valeur;



	public function __construct($code, $quantity)
	{
	    $this->code = intval($code);
	    $this->quantity = intval($quantity);
		// Check if a cookie already exists
		$this->getCookie();

	}

	public function getCookie()
	{
		// Stores cookie value in object
		if (isset($_COOKIE[$this->cookie_name]))
		{
            $basket = $_COOKIE[$this->cookie_name];
            unset($_COOKIE[$this->cookie_name]);
            $this->cookie_value = $basket. "/" .$this->code . "-" . $this->quantity;
            $this->setCookie();
            if (isset($_SESSION['user']))
            {
                //$this->add();
            }
            header('Location: ?code='.$this->code);
            echo "cookie existant";
		}
		else {
            $this->cookie_value = $this->code . "-" . $this->quantity;
            var_dump($this->cookie_value);
            $this->setCookie();
            if (isset($_SESSION['user']))
            {
                //$this->add();
            }
            header('Location: ?code='.$this->code);
            echo "cookie set";

        }
	}

	public function addProduct($productId, $quantity)
	{
		// Adds a product to the basket cookie
		$this->cookie_value[] = [$productId => $quantity];
	}

	public function setCookie()
	{
		// Adds a cookie for 30 days
		return setcookie($this->cookie_name, $this->cookie_value, time()+3600*24*30);
	}

	public function getProducts()
	{
		// Returns each product as object-product
	}

	public function getBasketQuantity()
	{
		return count($this->cookie_value);
	}

	public function add()
    {
        $order_data = new OrderModel();
        $order_data->connectdb();
        $user_id = intval($_SESSION['user']->getId());
        $order_data->addToBasket($user_id, $this->code, $this->quantity);
        $order_data->dbclose();
    }

    public function cookieToArray()
    {
        $cookie_value = explode( "/", $_COOKIE[$this->cookie_name]);
        $cookie_array = [];
        for ($i=0; isset($cookie_value[$i]); $i++)
        {
            array_push($cookie_array, explode("-", $cookie_value[$i]));
        }

    }
}
