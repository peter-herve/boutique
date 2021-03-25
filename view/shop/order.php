<h1>Récapitulatif de votre commande</h1>

<table>
    <th><td>Article</td><td>Quantité</td><td>Prix</td></th>
    <form>
<?php
for ($i=0;isset($this->order_total[$i]);$i++){
    echo "<tr>";
    for ($j=0;isset($this->order_total[$i][$j]);$j++)
    {
        echo "<td>".$this->order_total[$i][$j]."</td>";
    }
    echo "</tr>";
}
?>
    </form>
</table>
