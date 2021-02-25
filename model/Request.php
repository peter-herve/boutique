<?php


Class Request
{
    public $username;
    public $pass;
    public $hostname;
    public $dbname;
    public $pdo;

    public function __construct()
    {
        $this->username = "root";
        $this->hostname = "localhost";
        $this->dbname = 'boutique';
    }

    public function connectdb()
    {
        try {
            $this->pdo = new pdo("mysql:dbname=boutique;host=localhost", "root","");
        }
        catch (Exception $e)
        {
            echo $e . "<br>";
        }
    }

    public function dbclose()
    {
        $this->pdo = null;
    }

    public function findAll($tab){
        $query = $this->pdo->prepare("SELECT * from '$tab'");
        $query->execute();
        $this->allresult=$query->fetchAll();
		return $this->allresult;
    }

    public function findById($tab,$id){
        $query = $this->pdo->prepare("SELECT * from '$tab' WHERE id=:id");
        $query->execute(["id"=>$id]);
        $this->allresult=$query->fetchAll();
		return $this->allresult;
    }

    public function findWhere($tab,$cond,$cond_check)
    {
        $query = $this->pdo->prepare("SELECT * from '$tab' WHERE '$cond'='$cond_check'");
        $query->execute([$cond=>$cond_check]);
        $this->allresult=$query->fetchAll();
		return $this->allresult;
    }

}
