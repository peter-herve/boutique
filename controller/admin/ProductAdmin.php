<?php

class ProductAdmin extends Routeur{

    public $errors=[];
    public $success=[];

    public function __construct()
    {
        if (isset($_POST['add_product']))
        {
            $this->data =[
            "category"      => $this->category = htmlspecialchars($_POST['product_category']),
            "name"          => $this->name = htmlspecialchars($_POST['product_name']),
            "description"   => $this->description = htmlspecialchars($_POST['product_description']),
            "color"         => $this->color = htmlspecialchars($_POST['product_color']),
            "fabric"        => $this->fabric = htmlspecialchars($_POST['product_fabric']),
            "price"         => $this->price = htmlspecialchars($_POST['product_price']),
            "code"          => $this->code = htmlspecialchars($_POST['article_code']),
            ];
            var_dump($this->data);

            new AddProduct($this->data);

            if ($this->addProductdata()==true)
            {
                echo "ajout ok";
            }
            else
            {
                echo "échec ajout";
            }
        }


        ob_start();
        include VIEW.'admin.php';
        $this->main[] =  ob_get_clean();
        var_dump($this->errors);
        var_dump($this->success);
    }







}
