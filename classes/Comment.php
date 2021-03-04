<?php

/**
 * Gestionnaire de commentaires
 */
class Comment
{
	private $article_id;
	private $user_id;
	private $comment;
	private $mother_comment_id;


	function __construct($tab = NULL)
	{
		if ($tab) {
			$this->article_id	= $tab['article_id'];
			$this->user_id 		= $tab['user_id'];
			$this->comment 		= $tab['comment'];
			$this->mother_comment_id = $tab['comment_mother_id'];
		}
	}

	public function getComment()
	{
		return $this->comment;
	}

	public function getUserId()
	{
		return $this->user_id;
	}

	public function getUserName()
	{
		$model = new UserModel();
		return $model->getUserNameById($this->user_id);
	}
}
