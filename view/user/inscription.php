<div class="container">


<?php if (isset($this->success['register'])): ?>
	<div class="success">
		<h1>Bienvenue !</h1>
		<h3>Veuillez confirmer votre email</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>

<?php else: ?>

<div class="card col-md-9 col-sm-12 mb-3">

	<h1 class="card-title text-center">Inscription</h1>

	<form method="post" action="inscription">
		<?php if (isset($this->errors['field_empty'])): ?>
			<div class="alert alert-primary" role="alert">Un champs est vide</div>
		<?php endif; ?>
		<?php if (isset($this->errors['user_exists'])): ?>
			<div class="alert alert-primary" role="alert">Login indisponible</div>
		<?php endif; ?>
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

<?php endif; ?>

</div>
