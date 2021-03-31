<div class="container-md">
	<div class="row d-flex">

	<h1 class="text-center">Connectez-vous</h1>

	<form class="col-md-6 offset-md-3 col-sm-12" method="post" action="connexion">
		<?php if (isset($this->errors['login_unknown'])): ?>
			<div class="alert alert-primary" role="alert">Login inconnu...</div>
		<?php endif; ?>
		<?php if (isset($this->errors['login_empty'])): ?>
			<div class="alert alert-primary" role="alert">Le login ne peut être vide</div>
		<?php endif; ?>
		<label class="col-12 form-label" for="login">Login</label>
		<input class="col-12 form-control" type="text" name="login">
		<?php if (isset($this->errors['incorrect_password'])): ?>
			<div class="alert alert-primary" role="alert">Mot de passe incorrect...</div>
		<?php endif; ?>
		<?php if (isset($this->errors['password_empty'])): ?>
			<div class="alert alert-primary" role="alert">Le mot de passe ne peut être vide</div>
		<?php endif; ?>
		<label class="col-12 form-label" for="password">Password</label>
		<input class="col-12 form-control"  type="password" name="password">
		<input class="col-12 btn btn-secondary"  type="submit" name="submit">
	</form>


	</div>

</div>
