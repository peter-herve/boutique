<div class="advSearch">
	<!-- <a href="#"onclick="toggle('searchBox')">Recherche avancée</a> -->
	<img class="icon" src="<?= ICONS.'search.svg'?>" alt="Rechercher Avancée" title="Recherche avancée" onclick="toggle('searchBox')">
	<div class="searchBox" id="searchBox" style="display: none">
		<form id="searchBox" class="searchform" action="<?=URL?>shop/search" method="get">
			<!-- <fieldset>
				<legend>Sexe</legend>
				<input type="radio" name="gender" value="male">
				<label for="male">Homme</label><br>
				<input type="radio" name="gender" value="female">
				<label for="female">Femme</label><br>
			</fieldset> -->

			<fieldset>
				<legend>Catégories</legend>
				<!-- <label for=""></label><br> -->
				<?php foreach ($categories as $category): ?>
					<input id="<?=$category['category_name'] ?>" type="checkbox" name="<?=$category['category_name'] ?>" value="1">
					<label for="<?=$category['category_name'] ?>"><?=$category['category_name'] ?></label></br>
				<?php endforeach; ?>
			</fieldset>

			<fieldset>
				<legend>Couleurs</legend>
				<?php foreach ($colors as $color): ?>
					<input id="<?=$color['article_color'] ?>" type="checkbox" name="color" value="1">
					<label for="color"><?=$color['article_color'] ?></label><br>
				<?php endforeach; ?>
			</fieldset>

			<fieldset>
				<legend>Matières</legend>
				<?php foreach ($fabrics as $fabric): ?>
					<input id="<?=$fabric['article_fabric'] ?>" type="checkbox" name="fabric" value="1">
					<label for="fabric"><?=$fabric['article_fabric'] ?></label><br>
				<?php endforeach; ?>
			</fieldset>

			<!-- <fieldset>
				<legend>Note</legend>
				<select id="notes" name="notes" value=3>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select><span><h5>/5</h5></span>

			</fieldset> -->
			<input type="submit" name="shopsearch" value="rechercher">
		</form>
	</div>
</div>
