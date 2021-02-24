<?php
$category = new ProductAdmin()
?>

<form method="post" action="admin">
    <h2>Rechercher un client</h2>
    <label for="id">Id client</label>
    <input type="text" name="id">
    <label for="login">Login</label>
    <input type="text" name="login">
    <label for="Prenom">Prénom client</label>
    <input type="text" name="prenom">
    <label for="Nom">Nom client</label>
    <input type="text" name="nom">
    <label for="Email">Email client</label>
    <input type="text" name="email">
    <label for="Adress">Adresse client</label>
    <input type="text" name="adress">
    <input type="submit" name="search_user">
</form>

<form method="post" action="admin">
    <h2>Rechercher une commmande</h2>
    <label for="Commande">N° de commande</label>
    <input type="text" name="order_number">
    <input type="submit" name="search_order">
</form>

<form method="post" action="product-admin">
    <h2>Ajouter un produit</h2>
    <label for="product_category">Catégorie produit</label>
    <select name="product_category">
        <option>haut</option>
        <option>bas</option>
    </select>
    <label for="product_name">Nom produit</label>
    <input type="text" name="product_name">
    <label for="product_description">Description produit</label>
    <input type="text" name="product_description">
    <label for="product_color">Couleur</label>
    <input type="text" name="product_color">
    <label for="product_fabric">Matière</label>
    <input type="text" name="product_fabric">
    <label for="article_price">Prix</label>
    <input type="number" step="any" name="product_price">
    <label for="article_code">Code article</label>
    <input type="number" name="article_code">
    <input type="submit" name="add_product">
</form>

<form method="post" action="product-admin">
    <h2>Mettre à jour l'état de stock d'un article</h2>
    <input type="number" name="article_code">
    <input type="submit" name="stock_update">
</form>
