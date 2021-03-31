<?php

class ProductUpdate{


    public $main = [];
    public $html;

    public $pagetitle = "Gestion des fiches produits";
    public $css = "admin.css";


    public function __construct()
    {
        if (isset($_POST['product_info']))
        {
            $product_data = new ProductModel();
            $product_data->connectdb();
            $this->code = $_POST['article_code'];
            var_dump($product_data->findArticleAdmin($this->code));
            ob_start();
            include VIEW.'admin/product_update.php';
            echo "Info produit";
            $this->html = ob_get_clean();
            $view = new View($this->getPageTitle(), $this->getCss());
            $view->sendMain($this->getHtml());
            $view->render();
        }
    }


    public function getHtml()
    {
        return $this->html;
    }

    public function getPageTitle()
    {
        return $this->pagetitle;
    }

    public function getCss()
    {
        return $this->css;
    }
}
