<?php


/**
 *
 */
class View
{
	private $page;		// Page à afficher
	private $head;
	private $header;	// Le futur header généré
	private $content;	// Le main généré
	private $footer;	// Le footer généré
	private $basket;
	private $data;


	private $cssList = [
		"home"				=> 'Home',
		"shop"				=> 'shop',
		"product"			=> 'Product',
		"order"				=> 'Order',
		"payment"			=> 'Pay',
		"connexion"			=> 'Connexion',
		"inscription"		=> 'Profil',
		"profil"			=> 'Profil',
	];

	function __construct($page = NULL)
	{
		$this->page = $page;
		$this->basket = new Basket(1,1);


	}

	public function sendData($data)
	{
		$this->data = $data;
	}

	public function getData()
	{
		return $this->data;
	}

	public function renderHead($page_name)
	{
		ob_start();
		include(VIEW.'head.php');
		$this->head = ob_get_clean();
	}

	public function renderHeader()
	{
		ob_start();
		include(VIEW.'header.php');
		$this->header = ob_get_clean();
	}

	public function renderMain()
	{
		ob_start();
		include(VIEW.$this->page.'.php');
		$this->content = ob_get_clean();
	}

	public function renderFooter()
	{
		ob_start();
        include(VIEW.'footer.php');
        $this->footer = ob_get_clean();
	}

	public function render()
	{
		$this->renderHead($this->page);
		$this->renderHeader();
		$this->renderMain();
		$this->renderFooter();
		include_once (VIEW.'gabarit.php');
	}
}
