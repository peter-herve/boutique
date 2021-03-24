<?php

class AddCategory{



    public function __construct($category_name, $category_hierarchy)
    {
        $this->category_name = htmlspecialchars($category_name);
        $this->category_hierarchy = htmlspecialchars($category_hierarchy);
        $data = new ProductModel();
        $data->connectdb();
        if ($this->checkForm($this->category_name,  $this->category_hierarchy)) {
            if (empty($data->checkCategory($this->category_name))) {
                $data->addCategory($this->category_name, $this->category_hierarchy);
               $this->success['category_name_added'] = true;
                return true;
            }
            $this->errors['category_name_exists'] = true;
            return false;
        }$this->errors['empty_field'] = true;
    }



    public function checkForm($category_name, $category_hierarchy)
    {
        if(!empty(trim($category_name) || !empty(trim($category_hierarchy))))
        {
            return true;
        }else{
            return false;
        }
    }
}
