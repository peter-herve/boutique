<?php

/**
 *
 */
class LikeModel extends Request
{
	private $user_id;
	private $rating;
	private $article_id;

	function __construct($tab = Null)
	{
		if ($tab) {
			$this->user_id 		= $tab['user_id'];
			$this->rating 		= $tab['rating'];
			$this->article_id 	= $tab['article_id'];
		}
	}

	public function getAvgRatingforProductId($id)
	{
		$this->connectdb();
		$query = $this->pdo->prepare("SELECT AVG(rating) FROM like_article WHERE article_id = :id");
		$query->execute(["id" => $id]);
		$rating = $query->fetchAll();
		$this->dbclose();
		return round($rating[0]['AVG(rating)'], 2);
	}

	public function getNbOfLikesForProductId($id)
	{
		$this->connectdb();
		$query = $this->pdo->prepare("SELECT COUNT(*) FROM like_article WHERE article_id = :id");
		$query->execute(["id" => $id]);
		$rating = $query->fetchAll();
		$this->dbclose();
		return $rating[0]['COUNT(*)'];
	}

	public function getRating()
	{
		return $this->rating;
	}

	public function addLike($article_id, $user_id)
	{
		$this->connectdb();
		$query = $this->pdo->prepare("INSERT INTO like_article (user_id, article_id) VALUES (:user_id, :article_id)");
		$query->execute(["user_id" => $user_id, "article_id" => $article_id]);
		$this->dbclose();
	}
}
