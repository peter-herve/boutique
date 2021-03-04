<?php

class ShopModel extends Routeur
{

    public $main = [];
    public $html;

    public $pagetitle = "Shop produit";
    public $css = "shop.css";

	function __construct()
	{
	    if ($_SESSION['url'][1]=='basket')
        {
            $this->code = $_SESSION['url'][2];
            new Basket($this->code, 1);

            var_dump($_COOKIE);
        }

	    if ($_SESSION['url'][1]=='order')
        {
            $this->code = $_SESSION['url'][2];
            new Order();
        }


        $this->code = $_SESSION['url'][1];
        $this->displayArticle();

		$this->pagetitle = "Modele";
		$this->css = "shop/shopmodele.css";
		ob_start();
		include (VIEW.'shop/model.php');
		$this->html[] = ob_get_clean();
		$view = new View($this->getPageTitle(), $this->getCss());
		$view->sendMain($this->getHtml());
		$view->render();
	}

    public function displayArticle()
    {
        $product_data=new ProductModel();
        $product_data->connectdb();
        return $this->data =  $product_data->findArticle($this->code);
    }


}
