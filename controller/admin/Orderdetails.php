<?php

class Orderdetails{

    public $pagetitle = "Details de commande";
    public $css = "admin.css";



    public function __construct()
    {
        if (isset($_POST['update_order']))
        {
            $this->order = htmlspecialchars($_POST['id']);
            $order_data = new OrderModel();
            $order_data->connectdb();
            $order_data->updateOrder($_POST['order_status'], $_POST['id']);

        }
        if (isset($_GET['search_order'])) {
            $this->order = htmlspecialchars($_GET['order_number']);

            $order_data = new OrderModel();
            $order_data->connectdb();

        }

        if (isset($_POST['delete_article_order']))
        {
            $this->order =  htmlspecialchars($_POST['order_id']);
            $order_data = new OrderModel();
            $order_data->connectdb();
            $order_data->deleteFromOrder($this->order,$_POST['delete_article_order']);

        }
        $tab = $order_data->searchOrderadmin($this->order);
        ob_start();
        include(VIEW . 'admin/order_details.php');
        $this->html[] = ob_get_clean();
        $view = new View($this->getPageTitle(), $this->getCss());
        $view->sendMain($this->getHtml());
        $view->render();
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