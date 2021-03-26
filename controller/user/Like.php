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

		if (isset($_SESSION['url'][0]) && isset($_SESSION['user'])) {
			$model = new LikeModel();
			if ($model->checkLike($_SESSION['url'][0], $_SESSION['user']->getId())) {
				$model->removeLike($_SESSION['url'][0], $_SESSION['user']->getId());
			}
			else {
				$model->addLike($_SESSION['url'][0], $_SESSION['user']->getId());
			}
		}
		header('Location: '.URL."shop/model/".$_SESSION['url'][0]);

	}
}
