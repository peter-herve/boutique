<?php

/**
 *
 */
class CommentModel extends Request
{


	public function userAddCommentToProductId($user_id, $comment, $article_id, $motherId)
	{
		$this->connectdb();
		$query = $this->pdo->prepare("INSERT INTO comments (article_id, user_id, comment, comment_mother_id) VALUES (:article_id, :user_id, :comment, :mother_id)");
		$query->execute(["user_id"=>$user_id, "comment" => $comment, "article_id" => $article_id, "mother_id" => $motherId]);
		$this->dbclose();
	}

	public function getCommentsForProductId($productId)
	{
		$comments = [];
		$this->connectdb();
		$query = $this->pdo->prepare("SELECT * FROM comments WHERE article_id=:productId");
		$query->execute(['productId' => $productId]);
		$res = $query->fetchAll();
		$this->dbclose();

		foreach ($res as $comment) {
			$comments[] = new Comment($comment);
		}
		return $comments;
	}

	public function getCommentFromId($comment_id)
	{
		$this->connectdb();
		$query = $this->pdo->prepare("SELECT * FROM comments WHERE id=:commentId");
		$query->execute(['commentId' => $comment_id]);
		$res = $query->fetchAll();
		$this->dbclose();
		return new Comment($res[0]);
	}

	public function removeComment($comment)
	{
		if (isset($_SESSION['user']) && $_SESSION['user']->getId() == $comment->getUserId()) {
			$this->connectdb();
			$query = $this->pdo->prepare("DELETE FROM comments WHERE id = :comment_id");
			$query->execute(["comment_id" => $comment->getId()]);
			$this->dbclose();
		}
	}
}
