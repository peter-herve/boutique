<?php

/**
 *
 */
class Like extends Routeur
{

	function __construct()
	{
		//Menage Url
		$this->cleanUrl();

		if (isset($_SESSION['url'][0])) {
			echo "yeah";
			$model = new LikeModel();
			$addLike = $model->addLike($_SESSION['url'][0], $_SESSION['user']->getId());
		}
		header('Location: '.URL."shop/model/".$_SESSION['url'][0]);

	}
}
