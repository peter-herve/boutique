<?php

class History{

    public $main = [];
    public $html;

    public $pagetitle = "Dashboard";
    public $css = "admin.css";

    public function __construct()
    {

        if (isset($_SESSION['user']))
        {
            $order_details=new OrderModel();
            $order_details->connectdb();
            var_dump($order_details->getOrdersbyId($_SESSION['user']->getId()));
            $order_details->dbclose();
        }
        ob_start();
        include (VIEW.'admin/dashboard.php');
        $this->html[] = ob_get_clean();
        $view = new View($this->pagetitle, $this->css);
        $view->sendMain($this->html);
        $view->render();
    }


}
