
	<hr>
	<h1 class="pageTitle">Resultats de votre recherche :</h1>
	<hr>
<?php foreach ($products as $product): ?>
	<div class="product">
		<div class="selection">
			<img class="imageProduit" src="https://via.placeholder.com/200x300" alt="">
			<div class="infoProduit">
				<h2 class="prixProduit"><?= $product->getPrice() ?>€</h2>
				<h3 class="nomProduit"><?= $product->getName() ?></h3>
				<a class="decouvrir" href="shop/model/jznerf">Fiche produit</a>
			</div>
		</div>
	</div>
<?php endforeach; ?>
