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
	public $content_panier;

	public function __construct($id, $code, $size,  $quantity, $price)
	{
	    $this->id = $id;
	    $this->code = intval($code);
	    $this->quantity = intval($quantity);
	    $this->price = $price;
	    $this->size = $size;
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
            $this->cookie_value = $basket. "/" .$this->code . "-" . $this->id . "-" . $this->size . "-" . $this->quantity . "-" . $this->price;
            $this->setCookie();
            if (isset($_SESSION['user']))
            {
                $this->add();
            }
            header('Location:'.URL."shop/model/".$this->id);
            echo "cookie existant";
		}
		else {
            $this->cookie_value = $this->code . "-" . $this->id . "-" . $this->size . "-" . $this->quantity . "-" . $this->price;
            var_dump($this->cookie_value);
            $this->setCookie();
            if (isset($_SESSION['user']))
            {
                $this->add();
            }
            header('Location:'.URL."shop/model/".$this->id);
            echo "cookie set";

        }
		var_dump($this->cookie_value);
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
        $order_data->addToBasket($user_id, $this->id, $this->code,$this->size, $this->quantity, $this->price);
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

    static function SumPriceBasket(){
        $cookie_value = explode("/", $_COOKIE['basket']);
        $cookie_array = [];
        $temp=[];
        for ($i = 0; isset($cookie_value[$i]); $i++) {
            array_push($cookie_array, explode("-", $cookie_value[$i]));
        }
        for ($i=0;isset($cookie_array[$i]);$i++)
        {
            array_push($temp, floatval(str_replace(',','.',$cookie_array[$i][4])));
        }
        return floatval(array_sum($temp));
    }

    static function getUserBasket(){
	    $basket = new OrderModel();
	    $basket->connectdb();
	    $temp = $basket->getUserBasket();
	    $data = new ProductModel();
	    $data->connectdb();
	    $article_list = $data->findArticle($temp[0]['article_id']);
	    $article_list->setSize($temp[0]['article_size']);
	    $article_list->setQuantity($temp[0]['quantity']);
        $cookie_value = $article_list->getArticleCode() . "-" . $article_list->getId() . "-" . $article_list->getSize() . "-" . $article_list->getQuantity() . "-" . $article_list->getPrice();
        setcookie('basket', $cookie_value, time()+3600*24*30, "/");

    }



}
