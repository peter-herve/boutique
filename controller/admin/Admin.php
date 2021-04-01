<?php

class Admin extends Routeur {

    public $html;

    public $pagetitle = "Espace administrateur";
    //public $css = "admin.css";

    private $routes = [
        "stockupdate" => "StockUpdate",
        "admin" => "Admin",
    ];

    public function __construct()
    {
        if (isset($_SESSION['url'][0])) {
            $this->url=$_SESSION['url'][0];
            \array_splice($_SESSION['url'], 0, 1);
        }
        $this->selectView();
    }

    public function selectView()
    {
        if (isset($_SESSION['url'][0]) && $_SESSION['url'][0] == "stockupdate") {
            new StockUpdate();

        }
        if (isset($_SESSION['url'][0]) && $_SESSION['url'][0] == "orderdetails") {
            new Orderdetails ();
        }

        if (isset($_SESSION['url'][0]) && $_SESSION['url'][0] == "userdetails") {
            new UserDetails ();
        }

        if (isset($_SESSION['url'][0]) && $_SESSION['url'][0] == "productupdate") {
            new ProductUpdate();
        }

        if (isset($_POST['add_category']))
        {
            new AddCategory($_POST['category_name'], $_POST['category_hierarchy']);
            echo "Categorie ajoutée";

        }

        if (isset($_POST['add_product'])) {
            $this->data = [
                "category" => $this->category = htmlspecialchars($_POST['product_category']),
                "name" => $this->name = htmlspecialchars($_POST['product_name']),
                "description" => $this->description = htmlspecialchars($_POST['product_description']),
                "color" => $this->color = htmlspecialchars($_POST['product_color']),
                "fabric" => $this->fabric = htmlspecialchars($_POST['product_fabric']),
                "price" => $this->price = htmlspecialchars($_POST['product_price']),
                "code" => $this->code = htmlspecialchars($_POST['article_code']),
            ];
            $add_product = new AddProduct($this->data);

            if ($add_product->addProductdata() == true) {
                $add_product->success;
            } else {
                $add_product->errors;

            }
            ob_start();
            include(VIEW . 'admin/admin.php');
            $this->html[] = ob_get_clean();
            $view = new View($this->getPageTitle(), $this->getCss());
            $view->sendMain($this->getHtml());
            $view->render();

        } elseif (!isset($_SESSION['url'][0])) {
            ob_start();
            include(VIEW . 'admin/admin.php');
            $this->html[] = ob_get_clean();
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
       // return $this->css;
    }

    public function displayCategory()
    {
        $category_data = new ProductModel();
        $category_data->connectdb();
        $data = $category_data->getCategory();

        for($i=0; isset($data[$i]); $i++)
        {
            echo "<option>" . $data[$i]['category_name'] . "</option>";
        }
    }


    }
