<?php

class ProductAdmin extends Routeur{

    public $errors=[];
    public $success=[];

    public function __construct()
    {
        var_dump($_POST);
        if (isset($_POST['add_product']))
        {
            $this->category = htmlspecialchars($_POST['product_category']);
            $this->name = htmlspecialchars($_POST['product_name']);
            $this->description = htmlspecialchars($_POST['product_description']);
            $this->color = htmlspecialchars($_POST['product_color']);
            $this->fabric = htmlspecialchars($_POST['product_fabric']);
            $this->price = htmlspecialchars($_POST['product_price']);
            $this->code = htmlspecialchars($_POST['article_code']);

            if ($this->addProductdata()==true)
            {
                echo "ajout ok";
            }
            else
            {
                echo "échec ajout";
            }
        }
        if (isset($_POST['stock_update']))
        {
            $this->code = htmlspecialchars($_POST['article_code']);
            $product_data = new ProductModel();
            $product_data->connectdb();
            if (!empty($product_data->findArticleStock($this->code)))
            {

                $view = new View('stockupdate');
                $_SESSION['stock_update'] = new StockUpdate($product_data->findArticleStock($this->code));
                $view->sendMain($_SESSION['stock_update']->main);
                $view->render();
            }
        }

        $view=new View('admin');
        $view->render();
        var_dump($_SESSION['stock_update']);
        var_dump($this->errors);
        var_dump($this->success);
    }



    public function addProductdata()
    {
        if ($this->checkForm($this->category,$this->name,$this->description, $this->color, $this->fabric, $this->price, $this->code))
        {
            $product_data = new ProductModel();
            $product_data->connectdb();
            if (empty($product_data->checkArticlecode($this->code)))
            {
                $product_data->addProduct($this->category, $this->name, $this->description, $this->color, $this->fabric, $this->price, $this->code);
                $this->success['add_product'] = true;
                $id=$product_data->findArticleId($this->code);
                var_dump($product_data->findArticletype($this->category));
                if($product_data->findArticletype($this->category)=="haut")
                {
                    $product_data->addProductDetailstop($id, $this->name,$this->price,$this->code);
                    $this->success['add_product'] = true;
                    return true;
                }
                elseif($product_data->findArticletype($this->category)=="bas")
                {
                    $product_data->addProductDetailsbottom( $id, $this->name,$this->price,$this->code);
                    $this->success['add_product'] = true;
                    return true;
                }
            } else$this->errors['article_code_exist'] = true;
            return false;
        } else $this->errors['missing_info']=true;
        return false;
    }

    public function checkForm($category, $name, $description, $color, $fabric, $price, $code)
    {
        if (empty(trim($category)) ||empty(trim($name)) || empty(trim($description)) || empty(trim($color)) || empty(trim($fabric) || empty(trim($price))) || empty((trim($code))))
        {
            return false;
        } else return true;
    }

}
