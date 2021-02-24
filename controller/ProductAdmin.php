<?php

class ProductAdmin extends Routeur{

    public $errors=[];
    public $success=[];

    public function __construct()
    {
        $this->category = $_POST['product_category'];
        $this->name = $_POST['product_name'];
        $this->description = $_POST['product_description'];
        $this->color = $_POST['product_color'];
        $this->fabric = $_POST['product_fabric'];
        $this->price = $_POST['product_price'];
        $this->code = $_POST['article_code'];

        if ($this->checkForm($this->category,$this->name,$this->description, $this->color, $this->fabric, $this->price, $this->code))
        {
            $product_data = new ProductModel();
            $product_data->connectdb();
            var_dump($product_data->checkArticlecode($this->code));
            if ($product_data->checkArticlecode($this->code))
            {
                if ($this->category == "polo" || $this->category == "tshirt" || $this->category == "polo") {
                    $product_data->addProducttop($this->category, $this->name, $this->description, $this->color, $this->fabric, $this->price, $this->code);
                    $this->success['add_product'] = true;
                    $product_data->dbclose();
                } elseif ($this->category == "pantalon" || $this->category == "jeans" || $this->category == "short") {
                    $product_data->addProductbottom($this->category, $this->name, $this->description, $this->color, $this->fabric, $this->price, $this->code);
                    $this->success['add_product'] = true;
                    $product_data->dbclose();
                }
            } else $this->errors['article_code_exist'] = true;
        } else $this->errors['missing_info']=true;

        $view=new View('admin');
        $view->render();
        var_dump($this->errors);
        var_dump($this->success);
    }

    public function checkForm($category, $name, $description, $color, $fabric, $price, $code)
    {
        if (empty(trim($category)) ||empty(trim($name)) || empty(trim($description)) || empty(trim($color)) || empty(trim($fabric) || empty(trim($price))) || empty((trim($code))))
        {
            return false;
        } else return true;
    }

}
