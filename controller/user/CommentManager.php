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

		//var_dump($_SESSION['url']);
		if (isset($_SESSION['url'][0]) && $_SESSION['url'][0] == 'remove') {
			if (isset($_SESSION['url'][1])) {
				$comment = $model->getCommentFromId($_SESSION['url'][1]);
				$model->removeComment($comment);
				header('Location: '.URL.'model/'.$comment->getArticleId());
			}
		}
		elseif (isset($_SESSION['url'][0]) && $_SESSION['url'][0] == 'add') {
			if (isset($_POST['commentAdd']) && isset($_SESSION['user']) && isset($_SESSION['url'][1])) {
				$comment = trim(htmlspecialchars($_POST['comment']));
				if ($comment != '') {
					$model->userAddCommentToProductId($_SESSION['user']->getId(), $_POST['comment'], $_SESSION['url'][1], NULL);
				}
			}
			header('Location: '.URL.'model/'.$_SESSION['url'][1]);
		}

		else {
			header('Location: '.URL.'home');
		}

	}
}
