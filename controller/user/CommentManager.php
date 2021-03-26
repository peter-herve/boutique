<?php

/**
 *
 */
class CommentManager extends Routeur
{

	function __construct()
	{

		$this->cleanUrl();
		$model = new CommentModel();
		$comment = $model->getCommentFromId($_SESSION['url'][1]);

		//var_dump($_SESSION['url']);
		if (isset($_SESSION['url'][0]) && $comment) {
			if ($_SESSION['url'][0] == 'remove') {
				$model->removeComment($comment);
			}
			header('Location: '.URL.'model/'.$comment->getArticleId());
		}
		else {
			header('Location: '.URL.'home');
		}

	}
}
