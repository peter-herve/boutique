<?php

class OrderModel extends Request{

    public function searchOrderbyuser($id)
    {
        $query1 = $this->pdo->prepare("SELECT `id`, `status`, `date` from orders WHERE `id`=:id");
        $query1->execute(['id' => $id ]);
        $this->allresult_user_order=$query1->fetch(PDO::FETCH_ASSOC);
        $query2 = $this->pdo->prepare("SELECT order_id, article_id, `nb_pcs`, article_price from orders_details WHERE `order_id`=:id");
        $query2->execute(['id' => $this->allresult_user_order['id'] ]);
        $this->allresult_user_order_details=$query2->fetch(PDO::FETCH_ASSOC);
        $obj_merged = (object) array_merge((array) $this->allresult_user, (array) $this->allresult_user_order);
        return $allresult_user = array_merge( (array) $obj_merged, (array) $this->allresult_user_order_details);
    }

    public function searchOrderadmin($id)
    {
        $query = $this->pdo->prepare("SELECT * FROM orders WHERE id=:order_id ");
        $query->execute(['order_id'=>$id]);
        $this->allresult_order = $query->fetch(PDO::FETCH_ASSOC);
        $query2 = $this->pdo->prepare("SELECT order_id, article_id, `nb_pcs`, article_price from orders_details WHERE `order_id`=:id");
        $query2->execute(['id' => $this->allresult_order['id'] ]);
        $this->allresult_order_details=$query2->fetchAll();
        $query2 = $this->pdo->prepare("SELECT `id`, `login`, `prenom`, `nom`, `email`, `adress`, `zip_code`, `city`, `sexe`, `top_size`, `bottom_size`, `created_at`, `last_connexion`, `user_confirm` from users WHERE id=:user_id");
        $query2->execute(["user_id"=>$this->allresult_order['user_id']]);
        $this->allresult_order_details_user=$query2->fetch(PDO::FETCH_ASSOC);
        $obj_merged = (object) array_merge((array) $this->allresult_order, (array) $this->allresult_order_details);
        return $this->allresult_order =  (array) array_merge((array) $obj_merged, (array) $this->allresult_order_details_user);
    }
    public function updateOrder($status, $id)
    {
        $query = $this->pdo->prepare("UPDATE orders SET status = :status WHERE id = :id");
        $query->execute(["status"=>$status, "id"=> $id]);
    }

    public function deleteFromOrder($id,$article_code)
    {
        $query = $this->pdo->prepare("DELETE from orders_details WHERE order_id=:id AND article_id = :article_id");
        $query->execute(["id"=>$id, "article_id"=>$article_code]);
    }

    public function addToBasket($user_id, $article_code, $quantity)
    {
        $query = $this->pdo->prepare("INSERT INTO basket(`user_id`, `article_code`, `quantity`) VALUES (:user_id, :article_code, :quantity)");
        $query->execute(["user_id"=>$user_id, "article_code"=>$article_code, "quantity"=>$quantity]);
    }



}
