
<div class="modele">
	<div class="images">
		<img class="principale" src="<?=URL."img/store/" .  $this->article->getArticleCode(). "/" . $this->article->getArticleCode() . "-1.jpg"?>" alt="">
		<div class="miniatures">
			<img class="miniature" src="<?=URL."img/store/" .  $this->article->getArticleCode(). "/" . $this->article->getArticleCode() . "-2.jpg"?>" alt="">
			<img class="miniature" src="<?=URL."img/store/" .  $this->article->getArticleCode(). "/" . $this->article->getArticleCode() . "-3.jpg"?>" alt="">
		</div>
	</div>

	<div class="infoProduit">
		<h1 class="nom"><?=$this->article->getName()?></h1>
		<h2 class="prix"><?=$this->article->getPrice()?>€</h2>
		<?php if (isset($_SESSION['user'])): ?>
			<span class="material-icons" style="background-color: <?= $retVal = ($userLikes) ?  'green' :  '' ; ?>"><a href="<?=URL."like/".$this->article->getId()?>">thumb_up_off_alt</a></span>
		<?php endif; ?>
		<?php if ($this->article->getNbLikes()): ?>
			<p><?= $this->article->getNbLikes() ?> clients ont aimé ce produit</p>
		<?php endif; ?>
		<?php if ($sizes != NULL): ?>
			<h3>Tailles disponibles :</h3>
            <select>
			<?php foreach ($sizes as $product): ?>
                <option><span><p><?= $product->getSize()?></p></span><span><p> :<?= $product->getStock()?> en stock</p></span></option>
			<?php endforeach; ?>
            </select>
		<?php endif; ?>



		<a class="acheter" href=<?=$this->article->getId()."?basket=add"?>>Acheter</a>
        <a class="commande" href=<?=URL."order?code=".$this->article->getArticleCode()."&price=".$this->article->getPrice()."&qty=1&size="?>>Commande</a>
		<p class="description"><?= $this->article->getDescription() ?></p>
	</div>
</div>

<div class="comments">.
	<h2>Vos avis</h2>
	<?php if ($comments): ?>
		<?php foreach ($comments as $comment): ?>
			<h3>De <?=ucfirst ($comment->getUserName())?> :</h3>
			<p><?= $comment->getComment()?></p>
		<?php endforeach; ?>
	<?php else: ?>
		<p>Aucun avis, laissez nous votre commentaire!</p>
	<?php endif; ?>
</div>

<div class="addComment">
	<?php if (isset($_SESSION['user'])): ?>
		<form class="commentaireProduit" action="<?= URL."shop/model/".$this->article->getId()."/addComment"?>" method="post">
			<label for="comment">Donnez nous votre avis :</label></br>
			<input type="textarea" name="comment" value="">
			<input type="submit" name="commentAdd" value="Ajouter ce commentaire">
		</form>
	<?php else: ?>
		<h4>Veuillez vous connecter pour laisser un commentaire</h4>
	<?php endif; ?>
</div>

<section>
	<h1>Nos clients ont aussi consulté :</h1>
<?php if (!empty($alt_products)): ?>
	<div class="rubrique">
		<!-- <div class="rubrique"> -->
		<?php foreach ($alt_products as $product): ?>
			<div class="selection">
				<img class="imageProduit" src="<?=URL."img/store/" .  $product->getArticleCode(). "/" . $product->getArticleCode() . "-1.jpg"?>" alt="">
				<div class="infoProduit">
					<?php if ($product->getPromo()): ?>
						<h2 class="prixProduit"><?=$product->getPromo()?>€</h2>
						<h2 class="prixProduit"><strike><?=$product->getPrice()?>€</strike></h2>
					<?php else: ?>
						<h2 class="prixProduit"><?=$product->getPrice()?></h2>
					<?php endif; ?>

					<h3 class="nomProduit"><?=$product->getName()?></h3>
					<a class="decouvrir" href=<?= URL."shop/model/".$product->getId()?> >Fiche produit</a>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
<?php endif; ?>
</section>
