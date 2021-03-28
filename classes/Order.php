<?php

class Order{

    public $main = [];
    public $html;
    public $pagetitle = "Commande";
    public $css = "shop/shopmodele.css";
    public $order_total;
    public function __construct()
    {
        var_dump($_POST);
        if (!empty($_POST))
        {
            $this->quantity = $_POST['quantity'];
            $this->size = substr($_POST['size'], 0, 1);
            $this->article_code = $_POST['article_code'];
            $article = new ProductModel();
            $article->connectdb();
            $data = $article->findArticleBySize($this->article_code, $this->size);
            $data->setQuantity($this->quantity);
            $this->order = [$article->findArticleBySize($this->article_code, $this->size)];
            $article->dbclose();
            if  (isset($_COOKIE['basket']))
            {
                $article = new ProductModel();
                $article->connectdb();
                $this->order_total=[];
                $this->basket = $this->cookieToArray();
                $data_basket=[];
                for ($i=0; isset($this->basket[$i]);$i++)
                {
                        array_push($data_basket, $article->findArticleBySize($this->basket[$i][0], $this->basket[$i][2]));

                }
                $this->order_total=array_merge($data_basket, $this->order);
            }
            else {
                $this->order_total=$this->order;
            }
            $article->dbclose();
        }
       else if (empty($_POST))
        {
            $this->basket = $this->cookieToArray();
            $article = new ProductModel();
            $article->connectdb();
            $this->order_total=[];
            for ($i=0; isset($this->basket[$i]);$i++)
            {
                array_push($this->order_total, $article->findArticleBySize($this->basket[$i][0], $this->basket[$i][2]));

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
