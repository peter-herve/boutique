<div class="test">
	<form action="test" method="post">
		<label for="categorie">Categorie :</label>
		<select name="categorie">
			<?php foreach ($categories as $category): ?>
				<option value="<?=$category['id']?>"><?=$category['name']?></option>
			<?php endforeach; ?>
		</select>
		<label for="fabric">Matières :</label>
		<select name="fabric">
			<?php foreach ($fabrics as $fabric): ?>
				<option value="<?=$fabric['id']?>"><?=$fabric['name']?></option>
			<?php endforeach; ?>
		</select>
		<label for="colors">Couleurs :</label>
		<select name="colors">
			<?php foreach ($colors as $color): ?>
				<option value="<?=$color['id']?>"><?=$color['name']?></option>
			<?php endforeach; ?>
		</select>
		<button type="submit" name="search">Rechercher</button>

	</form>
	<section>
		<?php if (isset($_POST['search'])): ?>
			<h2>Voici les résultats de votre recherche :</h2>
		<?php endif; ?>

	</section>
	<section>
		<h2>Ajouter :</h2>
		<form action="test" method="post">
			<fieldset>
				<legend>Modele</legend>
				<fieldset>
					<legend>Infos :</legend>
					<label for="model_name">Nom :</label>
					<input type="text" name="model_name" required>
					<label for="model_description">Description :</label>
					<textarea name="model_description" required></textarea>
					<label for="modele_path">Chemin imgages :</label>
					<input type="text" name="model_path" required>
				</fieldset>

				<fieldset>
					<legend>Couleurs</legend>
					<?php foreach ($colors as $color): ?>
						<label for="<?=$color['name']?>"><?=$color['name']?></label>
						<input type="radio" name="<?=$color['name']?>" value="<?=$color['id']?>">
					<?php endforeach; ?>
				</fieldset>
				<fieldset>
					<legend>Categories</legend>
					<?php foreach ($categories as $category): ?>
						<label for="<?=$category['name']?>"><?=$category['name']?></label>
						<input type="radio" name="<?=$category['name']?>" value="<?=$category['id']?>">
					<?php endforeach; ?>
				</fieldset>
				<fieldset>
					<legend>Matières</legend>
					<?php foreach ($fabrics as $fabric): ?>
						<label for="<?=$fabric['name']?>"><?=$fabric['name']?></label>
						<input type="radio" name="<?=$fabric['name']?>" value="<?=$fabric['id']?>">
					<?php endforeach; ?>
				</fieldset>
			</fieldset>

			<input type="submit" name="add_modele">
		</form>

		<form action="test" method="post">
			<fieldset>
				<legend>Produit</legend>
				<fieldset>
					<legend>Modele :</legend>
					<label for="model_id">Id</label>
					<input type="number" name="model_id" required>
				</fieldset>

				<fieldset>
					<legend>Taille</legend>
					<?php foreach ($sizes as $size): ?>
						<label for="<?=$size['name']?>"><?=$size['name']?></label>
						<input type="radio" name="size_id" value="<?=$size['id']?>">
					<?php endforeach; ?>
				</fieldset>
				<fieldset>
					<legend>Stock</legend>
					<label for="stock">Reserve</label>
					<input type="number" name="stock">
				</fieldset>

			</fieldset>

			<input type="submit" name="add_product">
		</form>
	</section>

</div>
