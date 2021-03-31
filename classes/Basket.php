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

    public function __construct($id = null, $code = null, $size = null, $quantity = null, $price = null)
    {

        $this->id = $id;
        $this->code = intval($code);
        $this->quantity = intval($quantity);
        $this->price = $price;
        $this->size = $size;
        if (!isset($_SESSION['user'])) {
            $this->getCookie();
        } elseif (isset($_SESSION['user'])) {
            $this->add();
        }
    }


    public function getCookie()
    {
        // Stores cookie value in object
        if (isset($_COOKIE[$this->cookie_name])) {
            $basket = $_COOKIE[$this->cookie_name];
            unset($_COOKIE[$this->cookie_name]);
            $this->cookie_value = $basket . "/" . $this->code . "-" . $this->id . "-" . $this->size . "-" . $this->quantity . "-" . $this->price;
            $this->setCookie();
            if (isset($_SESSION['user'])) {
                $this->add();
            }
            //header('Location:'.URL."shop/model/".$this->id);
            echo "cookie existant";
        } else {
            $this->cookie_value = $this->code . "-" . $this->id . "-" . $this->size . "-" . $this->quantity . "-" . $this->price;
            $this->setCookie();
            if (isset($_SESSION['user'])) {
                $this->add();
            }
            //header('Location:'.URL."shop/model/".$this->id);
            echo "cookie set";

        }
    }

    public function setCookie()
    {
        return setcookie($this->cookie_name, $this->cookie_value, time() + 3600 * 24 * 30, "/");
    }

    public function add()
    {
        $order_data = new OrderModel();
        $order_data->connectdb();
        $user_id = intval($_SESSION['user']->getId());
        $order_data->addToBasket($user_id, $this->id, $this->code, $this->size, $this->quantity, $this->price);
        $order_data->dbclose();
    }

    static function countCookieArticle()
    {
        $cookie_value = explode("/", $_COOKIE['basket']);
        $cookie_array = [];
        for ($i = 0; isset($cookie_value[$i]); $i++) {
            array_push($cookie_array, explode("-", $cookie_value[$i]));
        }
        $count_array = count($cookie_array);
        return $count_array;

    }

    static function detailBasketHeader()
    {
        if (!isset($_SESSION['user'])) {
            if (isset($_COOKIE['basket'])) {
                $content_panier = [];
                $cookie_value = explode("/", $_COOKIE['basket']);
                $cookie_array = [];
                for ($i = 0; isset($cookie_value[$i]); $i++) {
                    array_push($cookie_array, explode("-", $cookie_value[$i]));
                }
                $article_data = new ProductModel();
                $article_data->connectdb();
                for ($i = 0; isset($cookie_array[$i]); $i++) {
                    $article = $article_data->findArticleId(intval($cookie_array[$i][0]));
                    $article->setQuantity($cookie_array[$i][1]);
                    array_push($content_panier, $article);
                }
                $article_data->dbclose();
                return $content_panier;
            }
        } elseif (isset($_SESSION['user'])) {
            $content_panier=[];
            $basket = new OrderModel();
            $basket->connectdb();
            $data = $basket->getUserBasket();
            $count = count($data);
            $article_data = new ProductModel();
            $article_data->connectdb();
            for($i=0; $i<$count;$i++)
            {
                $article = $article_data->findArticleBasket($_SESSION['user']->getId());
                $article->setQuantity($data[$i]['quantity']);
                array_push($content_panier, $article);
            }
            return $content_panier;
        }

    }

    static function SumPriceBasket()
    {
        $cookie_value = explode("/", $_COOKIE['basket']);
        $cookie_array = [];
        $temp = [];
        for ($i = 0; isset($cookie_value[$i]); $i++) {
            array_push($cookie_array, explode("-", $cookie_value[$i]));
        }
        for ($i = 0; isset($cookie_array[$i]); $i++) {
            $qty = intval($cookie_array[$i][3]);
            $price = floatval(str_replace(',', '.', $cookie_array[$i][4]));
            $total_ref = $qty * $price;
            array_push($temp, $total_ref);
        }
        return floatval(array_sum($temp));
    }

    static function SumPriceBasketCo()
    {
        self::$content_pa;
        var_dump($content_panier);
    }

    /*static function getUserBasket(){
	    $basket = new OrderModel();
	    $basket->connectdb();
	    $temp = $basket->getUserBasket();
	    $data = new ProductModel();
	    $data->connectdb();
	    var_dump($data->findArticle($temp[0]['article_id']));
	    $article_list = $data->findArticle($temp[0]['article_id']);
	    $article_list->setSize($temp[0]['article_size']);
	    $article_list->setQuantity($temp[0]['quantity']);
	    //$article_list->setbasketIndex($temp[0]['basket_index']);
        $cookie_value = $article_list->getBasketIndex() . "-" . $article_list->getArticleCode() . "-" . $article_list->getId() . "-" . $article_list->getSize() . "-" . $article_list->getQuantity() . "-" . $article_list->getPrice();
        var_dump($cookie_value);
        for ($i=1; isset($temp[$i]);$i++)
        {
            $article_list = $data->findArticle($temp[$i]['article_id']);
            $article_list->setSize($temp[$i]['article_size']);
            $article_list->setQuantity($temp[$i]['quantity']);
            $cookie_value = $cookie_value . "/" . $article_list->getArticleCode() . "-" . $article_list->getId() . "-" . $article_list->getSize() . "-" . $article_list->getQuantity() . "-" . $article_list->getPrice();
        }
        setcookie('basket', $cookie_value, time()+3600*24*30, "/");
    }*/

    public function cookieToArray()
    {
        $cookie_value = explode("/", $_COOKIE['basket']);
        $this->cookie_array = [];
        for ($i = 0; isset($cookie_value[$i]); $i++) {
            array_push($this->cookie_array, explode("-", $cookie_value[$i]));
        }
        return $this->cookie_array;
    }

    public function addCookieToBdd(){
            if (isset($_COOKIE['basket'])) {
                $this->cookieToArray();
                var_dump($this->cookieToArray());
                for ($i = 0; isset($this->cookie_array[$i]); $i++) {
                    $this->id = $this->cookie_array[$i][1];
                    $this->code = intval($this->cookie_array[$i][0]);
                    $this->quantity = intval($this->cookie_array[$i][3]);
                    $this->size = $this->cookie_array[$i][2];
                    $this->price = $this->cookie_array[$i][4];
                    $this->add();
                    setcookie("basket", '', time()-3600, "/");
                }
            }
    }
}



