<?php

class StockUpdate{

    public $stock = [];
    public $size = [];
    public $main = [];
    public $html;

    public $pagetitle = "Gestion des stocks";
    public $css = "admin.css";


    public function __construct()
    {

        if (isset($_POST['stock_update'])) {

            $product_data = new ProductModel();
            $product_data->connectdb();
            $this->code = $_POST['stock_update'];
            foreach ($_POST as $key => $value)
            {
                $product_data->stockUpdate($value, $this->code, $key);
            }
            $data = $product_data->findArticleStock($this->code);
            $this->foreachSize($data);
            ob_start();
            include VIEW.'admin/stockupdate.php';
            echo "Stock mis à jour";
            $this->html[] = ob_get_clean();
            $view = new View($this->getPageTitle(), $this->getCss());
            $view->sendMain($this->getHtml());
            $view->render();
        }
        if (isset($_GET['article_code'])) {
            $this->code = $_GET['article_code'];
            $product_data = new ProductModel();
            $product_data->connectdb();
            if (!empty($product_data->findArticleStock($this->code))) {
                $data = $product_data->findArticleStock($this->code);
                $this->article_price = $data[0]['article_price'];
                $this->article_code = $data[0]['article_code'];
                $this->foreachSize($data);
                ob_start();
                include VIEW . 'admin/stockupdate.php';
                $this->html[] = ob_get_clean();
                $view = new View($this->getPageTitle(), $this->getCss());
                $view->sendMain($this->getHtml());
                $view->render();
            }
        }
    }


    public function foreachSize($tab)
    {
        for($i=0;isset($tab[$i]);$i++)
        {
            array_push($this->size, $tab[$i][4]);
            array_push($this->stock, $tab[$i][5]);
        }
        return $this->data=array_combine($this->size,$this->stock);
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
