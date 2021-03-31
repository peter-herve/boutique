<div class="card mb-3">
	<h1 class="card-title text-center">Votre Profil</h1>
	<?php if (isset($_SESSION['user']) && $_SESSION['user']->isAdmin()): ?>
		<p class="card-text text-center"><small class="text-muted">Vous êtes Administrateur.</small></p>
	<?php endif; ?>
	<div class="row mb-3">
		<form class="col-md-8 offset-md-2 col-sm-12" method="post" action="profil">
			<fieldset class="bg-light">
				<legend>Identifiants personnels :</legend>
				<?php if (isset($this->errors['login_exists'])): ?>
					<div class="alert alert-danger" role="alert">Login existe</div>
				<?php endif; ?>
				<div class="row mb-3">
					<label class="col-3 col-form-label" for="login">Login</label>
					<div class="col-9">
						<input class="form-control" type="text" name="login" id="login" value="<?php echo $_SESSION['user']->getLogin()?>">
					</div>
				</div>
				<?php if (isset($this->errors['wrong_password'])): ?>
					<div class="alert alert-danger" role="alert">Password incorrect</div>
				<?php endif; ?>
				<?php if (isset($this->errors['different_passwords'])): ?>
					<div class="alert alert-danger" role="alert">Passwords différents</div>
				<?php endif; ?>
				<div class="row mb-3">
					<label class="col-3 col-form-label" for="password">Mot de passe</label>
					<div class="col-9">
						<input class="form-control" type="password" name="password" id="password">
					</div>
				</div>
			</fieldset>

			<fieldset class="bg-light">
				<legend>Informations personnelles :</legend>
				<div class="row mb-3">
					<div class="col-2">
						<select  class="form-control" id="sexe" name="sexe" selected="<?php echo $_SESSION['user']->getSexe()?>">
							<option selected><?php echo $_SESSION['user']->getSexe()?></option>
							<option></option>
							<option>Mr</option>
							<option>Mme</option>
						</select>
					</div>

					<label class="col-2 col-form-label text-end" for="prenom">Prénom :</label>
					<div class="col-3">
						<input class="form-control" type="text" name="prenom" id="prenom" value="<?php echo $_SESSION['user']->getPrenom()?>">
					</div>

					<label class="col-2 col-form-label text-end" for="nom">Nom :</label>
					<div class="col-3 mb-3">
						<input  class="form-control" type="text" name="nom" id="nom" value="<?php echo $_SESSION['user']->getNom()?>">
					</div>

					<?php if (isset($this->errors['email_exists'])): ?>
						<div class="alert alert-danger" role="alert">Email existe</div>
					<?php endif; ?>
					<label class="col-3 col-form-label" for="email">Email</label>
					<div class="col-9">
						<input class="form-control" type="email" name="email" id="email" value="<?php echo $_SESSION['user']->getEmail()?>">
					</div>
				</div>
			</fieldset>

			<fieldset class="bg-light">
				<legend>Adresse :</legend>
				<div class="row mb-3 ">
					<label class="col-3 col-form-label" for="adress">N° et nom de voie</label>
					<div class="col-9">
						<input class="form-control" type="text" name="adress" id="adress" value="<?php echo $_SESSION['user']->getAdress()?>">
					</div>


					<label class="col-3 col-form-label" for="city">Ville</label>
					<div class="col-9">
						<input class="form-control" type="text" name="city" id="city" value="<?php echo $_SESSION['user']->getCity()?>">
					</div>
					<label class="col-3 col-form-label" for="zip_code">Code Postal</label>
					<div class="col-9">
						<input class="form-control" type="number" name="zip_code" id="zip_code" min="01000" max="99999" value="<?php echo $_SESSION['user']->getZipCode()?>">
					</div>
				</div>
			</fieldset>

			<fieldset class="bg-light mb-3">
				<legend>Vos préférences :</legend>
				<div class="row mb-3">
					<label class="col-3 col-form-label" for="top_size">Votre taille haute</label>
					<div class="col-9">
						<select   class="form-control" name="top_size" id="top_size">
							<option selected><?php echo $_SESSION['user']->getTopSize()?></option>
							<option></option>
							<option>XS</option>
							<option>S</option>
							<option>M</option>
							<option>L</option>
							<option>XL</option>
							<option>XXL</option>
						</select>
					</div>

					<label class="col-3 col-form-label" for="bottom_size">Votre taille basse</label>
					<div class="col-9">
						<select  class="form-control" name="bottom_size" id="bottom_size">
							<option selected><?php echo $_SESSION['user']->getBottomSize()?></option>
							<option></option>
							<option>36</option>
							<option>38</option>
							<option>40</option>
							<option>42</option>
							<option>44</option>
							<option>46</option>
						</select>
					</div>
				</div>
			</fieldset>

			<div class="row">
				<input class="btn btn-secondary" type="submit" value="Mettre à Jour" name="submit_new_profile">
			</div>
		</form>
	</div>

</div>


<div class="card ">
	<h1 class="card-title text-center">Changer de mot de passe</h1>

	<div class="row">
		<form class="col-md-8 offset-md-2 col-sm-12 bg-light" method="post">
			<div class="row mb-3">
				<label class="col-6 col-form-label text-end" for="password">Ancien mot de passe</label>
				<div class="col-6">
					<input  class="form-control"  type="text" name="old_password" id="old_password">
				</div>
			</div>
			<div class="row mb-3">
				<label  class="col-6 col-form-label text-end" for="password">Nouveau mot de passe</label>
				<div class="col-6">
					<input  class="form-control" type="text" name="new_password" id="new_password">
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-6 col-form-label text-end" for="password">Confirmer le nouveau mot de passe</label>
				<div class="col-6">
					<input class="form-control" type="text" name="confirm_new_password" id="confirm_new_password">
				</div>
			</div>
			<div class="row">
				<input class="btn btn-secondary" type="submit" value="Changer de mot de passe" name="submit_new_pass">

			</div>
		</form>

	</div>

</div>

<main>
	<?php if (isset($_SESSION['user']) && $_SESSION['user']->isAdmin()): ?>
		<h2>Vous êtes Administrateur</h2>
	<?php endif; ?>
	<?php if (isset($this->success['update_profile'])): ?>
		<h1>Profil mis à jour</h1>
	<?php endif; ?>
	<?php if (isset($this->success['update_password'])): ?>
		<h1>Mot de passe mis à jour</h1>
	<?php endif; ?>
	<?php if (isset($this->errors['field_empty'])): ?>
		<h3 class="alert">Une information est vide</h3>
	<?php endif; ?>

	<form method="post" action="profil">
		<fieldset>
			<legend>Identifiants personnels :</legend>
			<?php if (isset($this->errors['login_exists'])): ?>
				<h3 class="alert">Login existe</h3>
			<?php endif; ?>
			<label for="login">Login</label>
			<input type="text" name="login" id="login" value="<?php echo $_SESSION['user']->getLogin()?>">
			<?php if (isset($this->errors['wrong_password'])): ?>
				<h3 class="alert">Password incorrect</h3>
			<?php endif; ?>
			<?php if (isset($this->errors['different_passwords'])): ?>
				<h3 class="alert">Passwords différents</h3>
			<?php endif; ?>
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
			<?php if (isset($this->errors['email_exists'])): ?>
				<h3 class="alert">Email existe</h3>
			<?php endif; ?>
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
