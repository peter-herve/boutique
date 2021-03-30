<?php

class Order{

    public $main = [];
    public $html;
    public $pagetitle = "Commande";
    public $css = "shop/shopmodele.css";
    public $order_total;
    public function __construct()
    {
        if (isset($_SESSION['user'])) {
            if (!empty($_POST)) {
                if (isset($_POST['submit_order'])) {
                    unset($_POST[array_search($_POST['submit_order'], $_POST)]);
                    var_dump($_POST);
                    $data = new OrderModel();
                    $data->connectdb();
                    $last_id = $data->addOrderToDb($_SESSION['user']->getId());
                    $count = count($_POST['article_id']) - 1;
                    $i = 0;
                    while ($i <= $count) {
                        $data->addOrderDetailToDb($last_id, $_POST['article_id'][$i], $_POST['article_qty'][$i], $_POST['article_price'][$i]);
                        $i++;
                    }
                    $data->deleteBasket($_SESSION['user']->getId());
                }
                if (isset($_POST['drop_article'])) {
                    $this->basket_index = $_POST['article_basket_id'][0];
                    $data = new OrderModel();
                    $data->connectdb();
                    $data->deleteFromBasket($this->basket_index);
                    $data->dbclose();

                } else {
                    $this->quantity = $_POST['quantity'];
                    $this->size = $_POST['size'];
                    $this->article_code = $_POST['article_code'];
                    $article = new ProductModel();
                    $article->connectdb();
                    $data = $article->findArticleBySize($this->article_code, $this->size);
                    $data->setQuantity($this->quantity);
                    $this->order = [$data];
                    $article->dbclose();
                    if (isset($_COOKIE['basket'])) {
                        $article = new ProductModel();
                        $article->connectdb();
                        $this->order_total = [];
                        $this->basket = $this->cookieToArray();
                        var_dump($this->basket);
                        $data_basket = [];
                        for ($i = 0; isset($this->basket[$i]); $i++) {
                            var_dump($this->basket);
                            $this->quantity = $this->basket[$i][3];
                            $data = $article->findArticleBasket($_SESSION['user']->getId());
                            $data->setQuantity($this->quantity);
                            array_push($data_basket, $data);
                        }
                        $this->order_total = array_merge($data_basket, $this->order);
                    } else {
                        $this->order_total = $this->order;
                    }
                    $article->dbclose();
                }
            }
            else{
                $article = new OrderModel();
                $article->connectdb();
                $basket = $article->getUserBasket($_SESSION['user']->getId());
                $article_data= new ProductModel();
                $article_data->connectdb();
                $this->order=[];
                for ($i=0; isset($basket[$i]);$i++)
                {
                    $data=$article_data->findArticleBasket($_SESSION['user']->getId());
                    array_push($this->order, $data);
                }
                $this->order_total=$this->order;
            }
        }
            elseif (!isset($_SESSION['user']))
            {
                if (isset($_COOKIE['basket'])) {
                    $article = new ProductModel();
                    $article->connectdb();
                    $this->order_total = [];
                    $this->basket = $this->cookieToArray();
                    $data_basket = [];
                    for ($i = 0; isset($this->basket[$i]); $i++) {
                        $article = new ProductModel();
                        $article->connectdb();
                        $data = $article->findArticle($this->basket[$i][1]);
                        $data->setQuantity($this->basket[$i][3]);
                        array_push($this->order_total, $data);
                    }
                }
                $article->dbclose();
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
