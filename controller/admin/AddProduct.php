<?php

class AddProduct{


    public function __construct($tab)
    {
        $this->category = $tab['category'];
        $this->name = $tab['name'];
        $this->description = $tab['description'];
        $this->color = $tab['color'];
        $this->fabric = $tab['fabric'];
        $this->price = $tab['price'];
        $this->code = $tab['code'];
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