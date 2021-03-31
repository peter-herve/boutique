<h1>Récapitulatif de votre commande</h1>

<table>
    <tr>
        <td>Article</td>
        <td>Id</td>
        <td>Description</td>
        <td>Quantité</td>
        <td>Prix</td>
        </tr>
    <form method="post" action="<?=URL."order"?>">
    <?php
    if (isset($this->order_total))
    {
    $count=count($this->order_total);
    for ($i=0;$i<$count;$i++)
    {
    ?>
        <tr>
            <input type="hidden" name="article_id[]" value="<?=$this->order_total[$i]->getId()?>">
            <input type="hidden" name="article_basket_id[]" value="<?=$this->order_total[$i]->getBasketIndex()?>">
            <input type="hidden" name="article_qty[]" value="<?=$this->order_total[$i]->getQuantity()?>">
            <input type="hidden" name="article_price[]" value="<?=$this->order_total[$i]->getPrice()?>">
            <input type="hidden" name="article_size[]" value="<?=$this->order_total[$i]->getSize()?>">
            <td><?=$this->order_total[$i]->getArticleCode()?></td>
                <td><?=$this->order_total[$i]->getId()?></td>
                <td><?= $this->order_total[$i]->getDescription()?></td>
                <td><?=$this->order_total[$i]->getQuantity()?></td>
                <td><?=$this->order_total[$i]->getPrice()?></td>
                <?php if(isset($_SESSION['user'])){
                    ?>
                <td><input type="submit" name="drop_article" value="Supprimer du panier"</td>
                <?php
                }
                ?>
        </tr>
    <?php
    }
?>

</table>
<?php if(isset($_SESSION['user'])){
    ?>
<input type="submit" name="submit_order" value="valider la commande">
    <?php
    }
    else
    {
    echo "Merci de vous connecter avant de valider la commande";
    }?>
</form>
<?php
}
    else{
        ?>
        </table>
<p>Il n'y a aucun produit dans le panier</p>

    <?php
    }
    ?>

