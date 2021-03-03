<?php

/**
 *
 */
class Test1 extends Routeur
{
	private $html;

	public $pagetitle = "NEW!";
	public $css = CSS."/test.css";

	function __construct()
	{
		if (isset($_SESSION['url'][0])) {
			\array_splice($_SESSION['url'], 0, 1);
		}

		//echo "Premier controller!!!</br>";
		ob_start();
		$prenom = "samir";
		include (VIEW.'test1.php');
		$this->html[] = ob_get_clean();
		//var_dump($this->data);
		//$this->addToMain($data);
		//echo "test1 main :";
		//var_dump($this->main);
		$view = new View(NULL, $this->css);
		$view->sendMain($this->getHtml());
		$view->render();
	}



	public function getHtml()
	{
		return $this->html;
	}
}
