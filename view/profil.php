<?php
var_dump($_SESSION['user']);
var_dump($_SESSION['user']['top_size']);
?>


<form method="post" action="profil">
    <label for="login">Login</label>
    <input type="text" name="login" id="login" value="<?php echo $_SESSION['user']['login']?>">

    <select id="sexe" name="sexe" selected="<?php echo $_SESSION['user']['sexe']?>">
        <option selected><?php echo $_SESSION['user']['sexe']?></option>
        <option></option>
        <option>Mr</option>
        <option>Mme</option>
    </select>

    <label for="prenom">Prénom</label>
    <input type="text" name="prenom" id="prenom" value="<?php echo $_SESSION['user']['prenom']?>">

    <label for="nom">Nom</label>
    <input type="text" name="nom" id="nom" value="<?php echo $_SESSION['user']['nom']?>">

    <label for="adress">N° et nom de voie</label>
    <input type="text" name="adress" id="adress" value="<?php echo $_SESSION['user']['adress']?>">

    <label for="city">Ville</label>
    <input type="text" name="city" id="city" value="<?php echo $_SESSION['user']['city']?>">

    <label for="zip_code">Code Postal</label>
    <input type="number" name="zip_code" id="zip_code" min="01000" max="99999" value="<?php echo $_SESSION['user']['zip_code']?>">

    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="<?php echo $_SESSION['user']['email']?>">

    <label for="password">Mot de passe</label>
    <input type="text" name="password" id="password">

    <label for="size">Votre taille</label>
    <select name="top_size" id="top_size">
        <option selected><?php echo $_SESSION['user']['top_size']?></option>
        <option></option>
        <option>XS</option>
        <option>S</option>
        <option>M</option>
        <option>L</option>
        <option>XL</option>
        <option>XXL</option>
    </select>

    <select name="bottom_size" id="bottom_size">
        <option selected><?php echo $_SESSION['user']['bottom_size']?></option>
        <option></option>
        <option>36</option>
        <option>38</option>
        <option>40</option>
        <option>42</option>
        <option>44</option>
        <option>46</option>
    </select>

    <input type="submit" value="Valider" name="submit_new_profile">
</form>

<form method="post">
    <label for="password">Ancien mot de passe</label>
    <input type="text" name="old_password" id="old_password">

    <label for="password">Nouveau mot de passe</label>
    <input type="text" name="new_password" id="new_password">

    <label for="password">Confirmer le nouveau mot de passe</label>
    <input type="text" name="confirm_new_password" id="confirm_new_password">

    <input type="submit" value="Valider" name="submit_new_pass">
</form>
