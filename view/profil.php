<main>
	<form method="post" action="profil">
		<fieldset>
			<legend>Identifiants personnels :</legend>
			<label for="login">Login</label>
			<input type="text" name="login" id="login" value="<?php echo $_SESSION['user']->getLogin()?>">
			<label for="password">Mot de passe</label>
			<input type="text" name="password" id="password">
		</fieldset>

		<fieldset>
			<legend>Informations personnelles :</legend>
			<select id="sexe" name="sexe" selected="<?php echo $_SESSION['user']->getSexe()?>">
				<option selected><?php echo $_SESSION['user']->getSexe()?></option>
				<option></option>
				<option>Mr</option>
				<option>Mme</option>
			</select>
			<label for="prenom">Prénom</label>
			<input type="text" name="prenom" id="prenom" value="<?php echo $_SESSION['user']->getPrenom()?>">
			<label for="nom">Nom</label>
			<input type="text" name="nom" id="nom" value="<?php echo $_SESSION['user']->getNom()?>">
			<label for="email">Email</label>
			<input type="email" name="email" id="email" value="<?php echo $_SESSION['user']->getEmail()?>">
		</fieldset>

		<fieldset>
			<legend>Adresse :</legend>
			<label for="adress">N° et nom de voie</label>
			<input type="text" name="adress" id="adress" value="<?php echo $_SESSION['user']->getAdress()?>">
			<label for="city">Ville</label>
			<input type="text" name="city" id="city" value="<?php echo $_SESSION['user']->getCity()?>">
			<label for="zip_code">Code Postal</label>
			<input type="number" name="zip_code" id="zip_code" min="01000" max="99999" value="<?php echo $_SESSION['user']->getZipCode()?>">
		</fieldset>

		<fieldset>
			<legend>Vos préférences :</legend>
			<label for="size">Votre taille</label>
			<select name="top_size" id="top_size">
				<option selected><?php echo $_SESSION['user']->getTopSize()?></option>
				<option></option>
				<option>XS</option>
				<option>S</option>
				<option>M</option>
				<option>L</option>
				<option>XL</option>
				<option>XXL</option>
			</select>
			<select name="bottom_size" id="bottom_size">
				<option selected><?php echo $_SESSION['user']->getBottomSize()?></option>
				<option></option>
				<option>36</option>
				<option>38</option>
				<option>40</option>
				<option>42</option>
				<option>44</option>
				<option>46</option>
			</select>
		</fieldset>

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
</main>
