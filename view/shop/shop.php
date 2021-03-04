<?php $for = [1, 2, 3, 4, 5, 6, 4, 5, 6] ?>

<hr>
<h1 class="pageTitle">Le Shop</h1>
<hr>
<section class="rubriques">

	<a class="rubriqueTitle" href="shop/soldes">Les bonnes affaires!!</a>
	<div class="rubrique">
		<?php foreach ($for as $product): ?>
		<div class="selection">
			<img class="imageProduit" src="https://via.placeholder.com/200x300" alt="">
			<div class="infoProduit">
				<h2 class="prixProduit">29€</h2>
				<h3 class="nomProduit">Nom du produit</h3>
				<h4 class="marqueProduit">Marque</h4>
				<a class="decouvrir" href=<?= URL."shop/model/100000" . $product ?>>Fiche produit</a>
			</div>
		</div>
		<?php endforeach; ?>
	</div>

	<a class="rubriqueTitle" href="shop/new">Les nouveautés</a>
	<div class="rubrique">
		<?php foreach ($for as $product): ?>
		<div class="selection">
			<a class="imageProduit" href="shop/model/<?= $product ?>"><img src="https://via.placeholder.com/200x300" alt=""></a>
			<div class="infoProduit">
				<h2 class="prixProduit">29€</h2>
				<h3 class="nomProduit">Nom du produit</h3>
				<h4 class="marqueProduit">Marque</h4>
			</div>
		</div>
		<?php endforeach; ?>
	</div>

	<hr>

	<a class="rubriqueTitle" href="shop/brands">Les marques</a>
	<div class="rubrique">
		<?php foreach ($for as $product): ?>
		<div class="selection">
			<a class="imageProduit" href="shop/model/<?= $product ?>"><img src="https://via.placeholder.com/200x300" alt=""></a>
			<div class="infoProduit">
				<h2 class="prixProduit">29€</h2>
				<h3 class="nomProduit">Nom du produit</h3>
				<h4 class="marqueProduit">Marque</h4>
			</div>
		</div>
		<?php endforeach; ?>
	</div>

	<hr>



</section>
