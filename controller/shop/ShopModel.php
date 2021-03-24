<?php

class ShopModel extends Routeur
{

    public $main = [];
    public $html;

    public $pagetitle = "Shop produit";
    public $css = "shop.css";

    private $routes = [
        "model" 		=> 	"ShopModel",
    ];


	function __construct()
    {
        if (isset($_SESSION['url'][0])) {
            \array_splice($_SESSION['url'], 0, 1);
        }
        $this->code = $_GET['code'];
        // var_dump($_COOKIE['basket']);


        if (isset($_GET['basket']))
        {
            new Basket($this->code,4);
        }
        $this->displayArticle();
        $this->pagetitle = "Modele";
        $this->css = "shop/shopmodele.css";
        ob_start();
        include (VIEW.'shop/model.php');
        $this->html[] = ob_get_clean();
        $view = new View($this->getPageTitle(), $this->getCss());
        $view->sendMain($this->getHtml());
        $view->render();
    }

    public function displayArticle()
    {
        $product_data=new ProductModel();
        $product_data->connectdb();
        return $this->data =  $product_data->findArticle($this->code);
    }


}
