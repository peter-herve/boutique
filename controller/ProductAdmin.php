<?php

class ProductAdmin extends Routeur{

    public $errors=[];
    public $success=[];

    public function __construct()
    {
        if (isset($_POST['add_product']))
        {
            $this->type = htmlspecialchars($_POST['product_type']);
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
            var_dump($product_data->findArticle($this->code));
            if (!empty($product_data->findArticle($this->code)))
            {
                $_SESSION['stock_update'] = $product_data->findArticle($this->code);
                $view = new View('stockupdate');
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
        if ($this->checkForm($this->type, $this->category,$this->name,$this->description, $this->color, $this->fabric, $this->price, $this->code))
        {
            $product_data = new ProductModel();
            $product_data->connectdb();
            if (empty($product_data->checkArticlecode($this->code)))
            {
                if ($this->type == "haut") {
                    $product_data->addProducttop($this->type, $this->category, $this->name, $this->description, $this->color, $this->fabric, $this->price, $this->code);
                    $this->success['add_product_top'] = true;
                    return true;
                } elseif ($this->type == "bas") {
                    $product_data->addProductbottom($this->type, $this->category, $this->name, $this->description, $this->color, $this->fabric, $this->price, $this->code);
                    $this->success['add_product_bottom'] = true;
                    return true;
                }
            } else$this->errors['article_code_exist'] = true;
            return false;
        } else $this->errors['missing_info']=true;
        return false;
    }

    public function checkForm($type, $category, $name, $description, $color, $fabric, $price, $code)
    {
        if (empty(trim($type)) || empty(trim($category)) ||empty(trim($name)) || empty(trim($description)) || empty(trim($color)) || empty(trim($fabric) || empty(trim($price))) || empty((trim($code))))
        {
            return false;
        } else return true;
    }

}
