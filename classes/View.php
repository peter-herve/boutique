<?php


/**
 *
 */
class View
{
	// NOUVEAU
	public $cssList = [
		// $a = CSS."/elements/congif.css",
		// $b = CSS."/elements/header.css",
		// $c = CSS."/elements/footer.css",
		// $d = CSS.'/'.mb_strtolower($this->page).".css",
		// $e = "https://fonts.googleapis.com/icon?family=Material+Icons"
	];


	public $pageTitle = "Yeah";

	//ANCIEN
	private $page;		// Page à afficher
	private $head;
	private $header;	// Le futur header généré
	private $main;	// Le main généré
	private $footer;	// Le footer généré
	private $basket;
	private $data;




	function __construct($pagetitle = NULL, $css = NULL)
	{
		if ($pagetitle) {
			$this->pageTitle = $pagetitle;
		}

		if ($css) {
			$this->cssList[] = CSS.$css;
		}
		$this->cssList[] = CSS."elements/config.css";
		$this->cssList[] = CSS."elements/header.css";
		$this->cssList[] = CSS."elements/footer.css";
		//echo CSS."elements/footer.css";
		$this->cssList[] = "https://fonts.googleapis.com/icon?family=Material+Icons";
		//var_dump($this->cssList);
		$this->basket = new Basket(1,1);

	}

	public function renderHead()
	{
		ob_start();
		include(VIEW.'elements/head.php');
		$this->head = ob_get_clean();
	}

	public function renderHeader()
	{
		ob_start();
		include(VIEW.'elements/header.php');
		$this->header = ob_get_clean();
	}

	public function sendMain($data)
	{
		$this->main = $data;
		//var_dump($this->main);
	}

	public function renderFooter()
	{
		ob_start();
		include(VIEW.'elements/footer.php');
		$this->footer = ob_get_clean();
	}



	public function render()
	{
		$this->renderHead();
		$this->renderHeader();
		//$this->renderMain();
		$this->renderFooter();
		//include_once (VIEW.'gabarit.php');
		echo $this->head;
		echo $this->header;
		foreach ($this->main as $content){
			echo $content;
		}
		echo $this->footer;
	}


}
