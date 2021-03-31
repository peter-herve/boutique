<div class="container">
    <h3>Details de la commande</h3>
    <h4>Numéro de commande: <?=$this->order?></h4>
    <div class="d-flex flex-row align-items-center">
    <h2 class="me-3">Client: <?=$tab['login']?></h2>
    <form method="post" action="userdetails">
        <input type="hidden" name="id" value="<?=$tab['user_id']?>">
        <input class="btn btn-dark" type="submit" name="search_user_order" value="Voir le profil"">
    </form>
    </div>
    <p>Statut de la commande: <?=$tab['status']?></p>

    <form method="post" action="orderdetails">
        <fieldset>
        <input type="hidden" name="id" value="<?=$tab[0]['order_id']?>">
        <label for="select">Mettre à jour le statut</label>
        <select name="order_status">
            <option>preparation</option>
            <option>sent</option>
            <option>received</option>
            <option>delivered</option>
        </select>
        <input type="submit" name="update_order" value="Valider">
        </fieldset>
    </form>


<div class="container col-6 mt-4 mb-4">
    <table class="table">
        <thead><td>code article</td><td>Nb pièces</td><td>Prix unitaire</td><td></td></thead>
    <?php
    if ($tab['status'] == 'sent' || $tab['status'] == 'received' || $tab['status'] == 'delivered'  ) {
        for ($i = 0; isset($tab[$i]); $i++) {
            echo "<tr>" . "<td>" . $tab[$i]['article_id'] . "</td>" . "<td>" . $tab[$i]['nb_pcs'] . "</td>" . "<td>" . $tab[$i]['article_price'] . "</td>" . "</tr>";
        }
    }

    if ($tab['status'] == 'preparation' ) {
        for ($i = 0; isset($tab[$i]); $i++) {
            ?>
            <form method='post' action="orderdetails">
                <input type="hidden" name="order_id" value="<?=$tab[0]['order_id']?>">
                <tr>
                    <td><?=$tab[$i]['article_id']?></td>
                    <td> <?=$tab[$i]['nb_pcs']?></td><td><?=$tab[$i]['article_price']?></td>

                    <td><button type="submit" class="btn btn-dark" name="delete_article_order" value="<?=$tab[$i]['article_id']?>">supprimer</button></td>
                </tr>
            </form>
        <?php
        }
    }
    ?>
    </table>
</div>
</div>

