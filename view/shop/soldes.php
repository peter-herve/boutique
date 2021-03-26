<section class="ban">
	<img src="<?= ASSETS."store/ban_soldes.jpg"?>" alt="Bannière soldes - jusqu'à -50%">
</section>
<section>
	<h1>Notre sélection de produits :</h1>
	<hr>
	<div class="rubrique">
		<?php foreach ($this->articles as $product): ?>
		<div class="selection">
			<img class="imageProduit" src="<?=URL."img/store/" .  $product->getArticleCode(). "/" . $product->getArticleCode() . "-1.jpg"?>" alt="">
			<div class="infoProduit">
				<?php if ($product->getPromo()): ?>
					<h2 class="prixProduit"><?=$product->getPromo()?>€</h2>
					<h2 class="prixProduit"><strike><?=$product->getPrice()?>€</strike></h2>
				<?php else: ?>
					<h2 class="prixProduit"><?=$product->getPrice()?>€</h2>
				<?php endif; ?>

				<h3 class="nomProduit"><?=$product->getName()?></h3>
				<a class="decouvrir" href=<?= URL."shop/model/".$product->getId()?> >Fiche produit</a>
			</div>
		</div>
		<?php endforeach; ?>
	</div>

</section>
