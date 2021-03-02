<form method="post" action="connexion">
	<?php if (isset($this->errors['login_unknown'])): ?>
		<h3 class="alert">Login inconnu...</h3>
	<?php endif; ?>
	<?php if (isset($this->errors['login_empty'])): ?>
		<h3 class="alert">Le login ne peut être vide</h3>
	<?php endif; ?>
	<label for="login">Login</label>
	<input type="text" name="login">
	<?php if (isset($this->errors['incorrect_password'])): ?>
		<h4 class="alert">Mot de passe incorrect...</h4>
	<?php endif; ?>
	<?php if (isset($this->errors['password_empty'])): ?>
		<h3 class="alert">Le mot de passe ne peut être vide</h3>
	<?php endif; ?>
	<label for="password">Password</label>
	<input type="password" name="password">
	<input type="submit" name="submit">
</form>
