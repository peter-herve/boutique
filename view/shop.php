<main class="shop">

	<section class="products">
		<?php foreach ($this->data as $article): ?>
		<article class="product">
			<img src="img/store/<?=$article->getType()."/".$article->getCategoryName()."/".mb_strtolower(str_replace(" ", "",$article->getName()))."/".mb_strtolower(str_replace(" ", "",$article->getName()))."-1.jpg"?>" alt="image Produit" class="image_produit">
			<div class="etiquette_solde">
				<div class="titre">
					<h2>Soldes!</h2>
				</div>
				<div class="etiquette_logo"><h3>CodeB</h3></div>
			</div>
			<div class="etiquette_vetement">
				<h3 class="prix"><strike><?= $article->getPrice() ?></strike></h3>
				<h3 class="reduc"> Soldes : <strong>29.90€</strong></h3>
				<hr>
				<h2 class="nom_produit"><?= $article->getName()?></h2>
				<h2 class="marque">Marque</h2>
				<hr>
				<div class="avis">
					<span class="material-icons small yellow">star star star star_half star_border </span>
					<!-- <span class="material-icons small">star</span> -->
					<h4 class="avis">293 avis</h4>
				</div>
				<span class="material-icons md-18">dry_cleaning local_offer local_laundry_service</span>

				<p><?= $article->getDescription()?></p>

				<a class="ajout_panier" href="order?productid=1">Voir le produit</a>
				<!-- <a class=" ajout_panier" href="order?productid=1" title="Ajouter au panier"><span class="material-icons">add_shopping_cart</span></a> -->
			</div>
		</article>
		<?php endforeach; ?>
	</section>
</main>
