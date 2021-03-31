<div class="container">


<?php if (isset($this->success['register'])): ?>
	<div class="container text-center">
		<h1>Bienvenue !</h1>
		<h3>Veuillez vous connecter</h3>
		<a class="btn btn-secondary" type="button" href="<?=URL?>connexion">Connexion</a>
	</div>

<?php else: ?>

<div class="card mb-3">

	<div class="row mb-3">
		<h1 class="card-title text-center">Inscription</h1>

	</div>

	<div class="row mb-3">

        <form class="col-md-8 offset-md-2 col-sm-12" method="post" action="inscription">
			<?php if (isset($this->errors['field_empty'])): ?>
				<div class="alert alert-primary" role="alert">Un champs est vide</div>
			<?php endif; ?>
			<?php if (isset($this->errors['user_exists']) && $this->errors['user_exists']): ?>
				<div class="alert alert-primary" role="alert">Login indisponible</div>
			<?php endif; ?>
			<fieldset class="bg-light mb-3">
				<legend>Identifiants</legend>
				<div class="row mb-3">
					<label class="col-3 col-form-label text-end" for="login">Login</label>
					<div class="col-9">
						<input class="form-control" type="text" name="login" id="login">
					</div>
				</div>
				<div class="row mb-3">
					<label class="col-3 col-form-label text-end" for="password">Mot de passe</label>
					<div class="col-9">
						<input class="form-control" type="password" name="password" id="password">
					</div>
				</div>
				<div class="row mb-3">
					<label class="col-3 col-form-label text-end" for="email">Email</label>
					<div class="col-9">
						<input class="form-control" type="email" name="email" id="email">
					</div>
				</div>
			</fieldset>


			<fieldset class="bg-light mb-3">
				<legend>Informations personnelles</legend>
				<div class="row mb-3">
					<div class="col-3">
						<select class="form-control" id="sexe" name="sexe">
					        <option>Mr</option>
					        <option>Mme</option>
					    </select>
					</div>

					<div class="col-9">
						<div class="row mb-3">
							<label class="col-3 col-form-label text-end" for="prenom">Prénom</label>
							<div class="col-9">
								<input class="form-control" type="text" name="prenom" id="prenom">
							</div>
						</div>
						<div class="row mb-3">
							<label class="col-3 col-form-label text-end" for="nom">Nom</label>
							<div class="col-9">
								<input class="form-control" type="text" name="nom" id="nom">
							</div>
						</div>

					</div>

				</div>
			</fieldset>

			<fieldset class="bg-light mb-3">
				<legend>Adresse de livraison</legend>

				<div class="row mb-3">
					<label class="col-3 col-form-label text-end" for="adress">N° et nom de voie</label>
					<div class="col-9">
						<input class="form-control" type="text" name="adress" id="adress">
					</div>
				</div>

				<div class="row mb-3">
					<label class="col-3 col-form-label text-end" for="city">Ville</label>
					<div class="col-9">
						<input class="form-control" type="text" name="city" id="city">
					</div>
				</div>

				<div class="row mb-3">
					<label class="col-3 col-form-label text-end" for="zip_code">Code Postal</label>
					<div class="col-9">
						<input class="form-control" type="number" name="zip_code" id="zip_code" min="01000" max="99999">
					</div>
				</div>
			</fieldset>


			<fieldset class="bg-light mb-3">
				<legend>Tailles</legend>
				<div class="row mb-3">
					<label class="col-3 col-form-label text-end" for="size">Haut</label>
					<div class="col-9">
						<select class="form-control" name="top_size" id="top_size">
					        <option></option>
					        <option>XS</option>
					        <option>S</option>
					        <option>M</option>
					        <option>L</option>
					        <option>XL</option>
					        <option>XXL</option>
					    </select>
					</div>
				</div>

				<div class="row mb-3">
					<label class="col-3 col-form-label text-end" for="size">Bas</label>
					<div class="col-9">
						<select class="form-control" name="bottom_size" id="bottom_size">
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

			<div class="row text-center mb-3">
				<input class="btn btn-secondary" type="submit" value="Inscription" name="submit">
			</div>


		</form>
	</div>


<?php endif; ?>

</div>
