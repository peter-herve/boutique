<div class="container">
	<h1 class="card text-center bg-white font-first">La Boutique</h1>

	<div class="row">

		<div class="col-md-2 ">

			<form id="searchBox" class="searchform row" action="<?=URL."shop/search"?>" method="get">
				<fieldset class="col-lg-12 col-sm-4  mb-3">
					<legend class="font-first">Catégories</legend>
					<!-- <label for=""></label><br> -->
					<?php foreach ($categories as $category): ?>
						<div class="form-check form-switch">
							<input class="form-check-input" id="<?=$category['category_name'] ?>" type="checkbox" name="<?=$category['category_name'] ?>" value="1">
							<label class="form-check-label" for="<?=$category['category_name'] ?>"><?= ucfirst($category['category_name']) ?></label></br>
						</div>
					<?php endforeach; ?>
				</fieldset>

				<fieldset class="col-lg-12 col-sm-4  mb-3">
					<legend class="font-first">Couleurs</legend>
					<?php foreach ($colors as $color): ?>
						<div class="form-check form-switch">
							<input class="form-check-input" id="<?=$color['article_color'] ?>" type="checkbox" name="<?=$color['article_color'] ?>" value="1">
							<label class="form-check-label" style="background-color : #<?=$color['hex']?>" for="<?=$color['article_color'] ?>">________</label><br>
						</div>
					<?php endforeach; ?>
				</fieldset>

				<fieldset class="col-lg-12 col-sm-4 mb-3">
					<legend class="font-first">Matières</legend>
					<?php foreach ($fabrics as $fabric): ?>
						<div class="form-check form-switch">
							<input class="form-check-input" id="<?=$fabric['article_fabric'] ?>" type="checkbox" name="<?=$fabric['article_fabric'] ?>" value="1">
							<label class="form-check-label" for="<?=$fabric['article_fabric'] ?>"><?=ucfirst($fabric['article_fabric']) ?></label><br>
						</div>
					<?php endforeach; ?>
				</fieldset>

				<div class="text-center">
					<button class="btn btn-secondary" type="submit" name="shopsearch" value="rechercher">Affiner la recherche</button>

				</div>
			</form>
		</div>
