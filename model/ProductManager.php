<?php

/**
 *
 */
class ProductManager extends Request
{
	private $model_id;
	private $size_id;
	private $stock;

	function __construct($tab)
	{
		$this->model_id 	= $tab[0];
		$this->size_id 		= $tab[1];
		$this->stock 		= $tab[2];
	}

	public function add()
    {
		$this->connectdb();
        $requete = $this->pdo->prepare("INSERT INTO products (model_id, size_id, stock) VALUES (?,?,?)");
        $requete->execute([ $this->model_id, $this->size_id, $this->stock]);
		$this->dbclose();
    }

}
