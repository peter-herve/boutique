<?php
	$categories = ['chemise','pantalon', 'smoking', 't-shirt', 'chemisier', 'short', 'bermuda', 'jupe', 'sous-vêtements']
 ?>
<div class="advSearch">
	<!-- <a href="#"onclick="toggle('searchBox')">Recherche avancée</a> -->
	<img class="icon" src="<?= ICONS.'search.svg'?>" alt="Rechercher Avancée" title="Recherche avancée" onclick="toggle('searchBox')">
	<div class="searchBox" id="searchBox" style="display: none">
		<form id="searchBox" class="searchform" action="shop" method="post">
			<fieldset>
				<legend>Sexe</legend>
				<input type="radio" name="gender" value="male">
				<label for="male">Homme</label><br>
				<input type="radio" name="gender" value="female">
				<label for="female">Femme</label><br>
			</fieldset>

			<fieldset>
				<legend>Catégories</legend>
				<?php foreach ($categories as $categorie): ?>
					<input id="<?=$categorie ?>" type="checkbox" name="<?=$categorie ?>" value="<?=$categorie ?>">
					<label for="<?=$categorie ?>"><?=$categorie ?></label><br>
				<?php endforeach; ?>
			</fieldset>

			<fieldset>
				<legend>Note</legend>
				<select id="notes" name="notes" value=3>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select><span><h5>/5</h5></span>

			</fieldset>
		</form>
	</div>
</div>
