<?php

/**
 *
 */
class Shop extends Routeur
{
	private $search_data;



	function __construct()
	{

		$model = new ProductModel();
		$model->connectdb();
		$articles_list = $model->findAll('articles');
		$model->dbclose();
		$articles = [];
		foreach ($articles_list as $db_line) {
			$articles[] = new Article($db_line);
		}
		$view = new View('Shop');
		$view->sendData($articles);
		// $view->renderHeader($this->user);
		// $view->renderMain($this->productList)
		$view->render();
	}
}
