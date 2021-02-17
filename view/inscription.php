<form method="post" action="inscription">
    <label for="login">Login</label>
    <input type="text" name="login" id="login">

    <select id="sexe" name="sexe">
        <option></option>
        <option>Mr</option>
        <option>Mme</option>
    </select>

    <label for="prenom">Prénom</label>
    <input type="text" name="prenom" id="prenom">

    <label for="nom">Nom</label>
    <input type="text" name="nom" id="nom">

    <label for="adress">N° et nom de voie</label>
    <input type="text" name="adress" id="adress">

    <label for="city">Ville</label>
    <input type="text" name="city" id="city">

    <label for="zip_code">Code Postal</label>
    <input type="number" name="zip_code" id="zip_code" min="01000" max="99999">

    <label for="email">Email</label>
    <input type="email" name="email" id="email">

    <label for="password">Mot de passe</label>
    <input type="password" name="password" id="password">

    <label for="size">Votre taille</label>
    <select name="top_size" id="top_size">
        <option></option>
        <option>XS</option>
        <option>S</option>
        <option>M</option>
        <option>L</option>
        <option>XL</option>
        <option>XXL</option>
    </select>

    <select name="bottom_size" id="bottom_size">
        <option></option>
        <option>36</option>
        <option>38</option>
        <option>40</option>
        <option>42</option>
        <option>44</option>
        <option>46</option>
    </select>

    <input type="submit" value="submit" name="submit">
</form>