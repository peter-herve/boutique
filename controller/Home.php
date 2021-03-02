<?php
/**
 *
 */
class Home extends Routeur
{
	public $html;

	public $pagetitle = "Home";
	public $css = "home.css";


	function __construct()
	{
		\array_splice($_SESSION['url'], 0, 1);

		ob_start();
		include (VIEW.'home.php');
		$this->html[] = ob_get_clean();
		$view = new View($this->getPageTitle(), $this->getCss());
		$view->sendMain($this->getHtml());
		$view->render();
	}
}
