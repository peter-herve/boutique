<h1>Récapitulatif de votre commande</h1>

<table>
    <tr>
        <td>Article</td>
        <td>Id</td>
        <td>Description</td>
        <td>Quantité</td>
        <td>Prix</td>
        </tr>
    <?php
    if (isset($this->order_total))
    {
    foreach ($this->order_total as $value)
    {
    ?>
    <form method="post" action="<?=URL."order"?>">
        <tr>
            <td><?=$value->getArticleCode()?></td>
            <td><?=$value->getId()?></td>
             <td><?= $value->getDescription()?></td>
            <td><?=$value->getQuantity()?></td>
            <td><?=$value->getPrice()?></td>
            <input type="hidden" name="article_basket_id" value="<?=$value->getBasketIndex()?>">
            <?php if(isset($_SESSION['user'])){
                    ?>
                <td><input type="submit" name="drop_article" value="Supprimer du panier"</td>
        </form>
                <?php
                }
                ?>
        </tr>
    <?php
    }
?>

</table>
<?php if(isset($_SESSION['user'])){
    foreach ($this->order_total as $value){
        ?>
    <form method="post" action="<?=URL."order"?>">
        <input type="hidden" name="article_id[]" value="<?=$value->getId()?>">
        <input type="hidden" name="article_basket_id[]" value="<?=$value->getBasketIndex()?>">
        <input type="hidden" name="article_qty[]" value="<?=$value->getQuantity()?>">
        <input type="hidden" name="article_price[]" value="<?=$value->getPrice()?>">
        <input type="hidden" name="article_size[]" value="<?=$value->getSize()?>">
        <?php
        }
        ?>
        <input type="submit" name="submit_order" value="valider la commande">
    </form>
    <?php

    }
    else
    {
    echo "Merci de vous connecter avant de valider la commande";
    }?>
<?php
}
    else{
        ?>
        </table>
<p>Il n'y a aucun produit dans le panier</p>

    <?php
    }
    ?>

