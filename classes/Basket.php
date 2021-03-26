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
	public $id;

	public function __construct($id, $code, $quantity, $price)
	{
	    $this->id = $id;
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
            header('Location:'.URL."shop/model/".$this->id);
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
            header('Location:'.URL."shop/model/".$this->id);
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

    static function countCookieArticle()
    {
        $cookie_value = explode("/", $_COOKIE['basket']);
        $cookie_array = [];
        for ($i = 0; isset($cookie_value[$i]); $i++) {
            array_push($cookie_array, explode("-", $cookie_value[$i]));
        }
        return count($cookie_array);

    }
    static function detailBasketHeader(){
	    $content_panier=[];
        $cookie_value = explode("/", $_COOKIE['basket']);
        $cookie_array = [];
        for ($i = 0; isset($cookie_value[$i]); $i++) {
            array_push($cookie_array, explode("-", $cookie_value[$i]));
        }
        $article_data = new ProductModel();
        $article_data->connectdb();
        for($i=0; isset($cookie_array[$i]);$i++)
        {
            $article = $article_data->findArticleId(intval($cookie_array[$i][0]));
            $article->setQuantity($cookie_array[$i][1]);
            array_push($content_panier, $article);
        }
        $article_data->dbclose();
        return $content_panier;
    }



}
