<?php $for = [1, 2, 3, 4, 5, 6, 4, 5, 6] ?>

<hr>
<h1 class="pageTitle">Le Shop</h1>
<hr>
<section>
	<h1>Meilleures ventes :</h1>
	<hr>
	<div class="rubrique">
		<?php foreach ($this->bestSells as $product): ?>
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

<section>
	<h1>Soldes :</h1>
	<hr>
	<div class="rubrique">
		<?php foreach ($this->soldes as $product): ?>
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

<section>
	<h1>Nouveautés :</h1>
	<hr>
	<div class="rubrique">
		<?php foreach ($this->new as $product): ?>
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


	<hr>



</section>
