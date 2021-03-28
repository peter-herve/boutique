<h1>Récapitulatif de votre commande</h1>

<table>
    <tr>
        <td>Article</td>
        <td>Id</td>
        <td>Description</td>
        <td>Quantité</td>
        <td>Prix</td>
        </tr>
    <form>
<?php
    for ($i=0;isset($this->order_total[$i]);$i++){?>
        <tr>
            <td><?=$this->order_total[$i]->getArticleCode()?></td>
            <td><?=$this->order_total[$i]->getId()?></td>
            <td><?= $this->order_total[$i]->getDescription()?></td>
            <td><?=$this->order_total[$i]->getQuantity()?></td>
            <td><?=$this->order_total[$i]->getPrice()?></td>
        </tr>
    <?php
}
?>
    </form>
</table>
