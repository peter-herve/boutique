

<div class="modele">
	<div class="images">
		<img class="principale" src="<?=URL."img/store/" .  $this->article->getArticleCode(). "/" . $this->article->getArticleCode() . "-1.jpg"?>" alt="">
		<div class="miniatures">
			<img class="miniature" src="https://via.placeholder.com/60x90" alt="">
			<img class="miniature" src="https://via.placeholder.com/60x90" alt="">
			<img class="miniature" src="https://via.placeholder.com/60x90" alt="">
			<img class="miniature" src="https://via.placeholder.com/60x90" alt="">
			<img class="miniature" src="https://via.placeholder.com/60x90" alt="">
		</div>
	</div>

	<div class="infoProduit">
		<h1 class="nom"><?=$this->article->getName()?></h1>
		<h2 class="prix"><?=$this->article->getPrice()?>€</h2>
		<span class="material-icons" style="background-color: green"><a href="<?=URL."user/like/"?>">thumb_up_off_alt</a></span>
		<h3 class="marque">Marque</h3>
		<a class="acheter" href=<?="model?code=" . $this->code . "&basket=1"?>>Acheter</a>
		<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
</div>

<div class="comments">
	<h2>Vos avis</h2>
	<?php if ($comments): ?>
		<?php foreach ($comments as $comment): ?>
			<h3>De <?=ucfirst ($comment->getUserName())?> :</h3>
			<p><?= $comment->getComment()?></p>
		<?php endforeach; ?>
	<?php endif; ?>
</div>
<div class="addComment">
	<?php if (isset($_SESSION['user'])): ?>
		<form class="commentaireProduit" action="<?= URL."shop/model/".$this->data[0]['article_code']."/addComment"?>" method="post">
			<label for="comment">Donnez nous votre avis :</label></br>
			<input type="textarea" name="comment" value="">
			<input type="submit" name="commentAdd" value="Ajouter ce commentaire">
		</form>
	<?php else: ?>
		<h4>Veuillez vous connecter pour laisser un commentaire</h4>
	<?php endif; ?>
</div>

<?php if (!empty($alt_products)): ?>
	<section class="rubriques">
		<div class="rubrique">
		<?php foreach ($alt_products as $product): ?>
			<div class="selection">
				<img class="imageProduit" src="https://via.placeholder.com/200x300" alt="">
				<div class="infoProduit">
					<h2 class="prixProduit"><?=$product->getPrice()?>€</h2>
					<h3 class="nomProduit"><?=$product->getName()?></h3>
					<h4 class="marqueProduit">Marque</h4>
					<a class="decouvrir" href=<?= URL."shop/model/100000    "?> >Fiche produit</a>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</section>
<?php endif; ?>
