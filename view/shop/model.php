
<div class="card mb-3">
	<div class="row g-0">
		<div class="col-md-4">
			<img class="img-fluid" src="<?=URL."img/store/" .  $this->article->getArticleCode(). "/" . $this->article->getArticleCode() . "-1.jpg"?>" alt="">
		</div>
		<div class="col-md-2">
			<img class="img-fluid" src="<?=URL."img/store/" .  $this->article->getArticleCode(). "/" . $this->article->getArticleCode() . "-2.jpg"?>" alt="">
			<img class="img-fluid" src="<?=URL."img/store/" .  $this->article->getArticleCode(). "/" . $this->article->getArticleCode() . "-3.jpg"?>" alt="">
		</div>
		<div class="col-md-6">
			<div class="card-body">
				<div class="d-flex flex-column justify-content-between">
					<div class="row">
						<div class="col-8">
							<h5 class="card-title"><?=$this->article->getName()?></h5>
							<h2 class="cart-text float-end"><?=$this->article->getPrice()?>€</h2>
							<p class="card-text"><small class="text-muted"><?= $this->article->getDescription() ?>.</small></p>

						</div>
						<?php if (isset($_SESSION['user'])): ?>
							<div class="material-icons col-12" >
								<a class=" rounded-circle" style="background-color: <?= $retVal = ($userLikes) ?  '#E75D39' :  '' ; ?>" href="<?=URL."like/".$this->article->getId()?>">thumb_up_off_alt</a>
							</div>
						<?php endif; ?>
						<?php if ($this->article->getNbLikes()): ?>
							<p class="col-12"><?= $this->article->getNbLikes() ?> Like(s)</p>
						<?php endif; ?>
					</div>



					<div class="row">
						<div class="col">
							<?php if ($sizes != NULL): ?>
								<select class="form-select">
									<option selected>Taille...</option>
								<?php foreach ($sizes as $product): ?>
									<option><span><p><?= $product->getSize()?></p></span><span><p> :<?= $product->getStock()?> en stock</p></span></option>
								<?php endforeach; ?>
								</select>
							<?php endif; ?>
						</div>
						<div class="col">
							<a class="btn btn-secondary" href=<?=$this->article->getId()."?basket=add"?>>Ajouter au panier</a>

						</div>
						<div class="col">
							<a class="btn btn-secondary" href=<?=URL."order?code=".$this->article->getArticleCode()."&price=".$this->article->getPrice()."&qty=1&size="?>>Commande directe</a>

						</div>

					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<div class="card  g-0 mb-3">
	<div class="card-body row">

		<div class=" col-md-6 col-sm-12">
				<h5 class="card-title bg-light">Vos Avis :</h5>
				<?php if ($comments): ?>
					<ul class="list-group list-group-flush">
					<?php foreach ($comments as $comment): ?>
						<li class="list-group-item">
						<h3 class="card-text text-muted"><?=ucfirst ($comment->getUserName())?> :</h3>
						<p class="card-text"><?= $comment->getComment()?></p>
						<?php if (isset($_SESSION['user']) && $_SESSION['user']->getId() == $comment->getUserId()): ?>
							<a class="card-text float-end" href="<?= URL."comment/remove/".$comment->getId() ?>"><span class="material-icons">delete</span></a>
						<?php endif; ?>
						</li>
					<?php endforeach; ?>
					</ul>
				<?php else: ?>
					<p class="card-text">Aucun avis, laissez nous votre commentaire!</p>
				<?php endif; ?>
		</div>

		<div class=" col-md-6 col-sm-12">
				<?php if (isset($_SESSION['user'])): ?>
					<form class="commentaireProduit" action="<?= URL."comment/add/".$this->article->getId()?>" method="post">
						<label class="form-control-label" for="comment">Donnez nous votre avis :</label></br>
						<input class="form-control" type="textarea" name="comment" rows="3" >
						<input class="btn btn-secondary float-end" type="submit" name="commentAdd" value="Ajouter ce commentaire">
					</form>
				<?php else: ?>
					<h4 class="card-text">Veuillez vous connecter pour laisser un commentaire</h4>
				<?php endif; ?>
		</div>
	</div>
</div>

<div class="card border-light">
	<div class="card-header">
		<h2 class="card-title">Nos clients ont aussi consulté :</h2>
	</div>
	<div class="card-body">
		<div class="card-group">
		<?php foreach ($alt_products as $product): ?>
				<div class="card" style="max-width: 18rem; min-width: 18rem;">
					<img class="card-img-top" src="<?=URL."img/store/" .  $product->getArticleCode(). "/" . $product->getArticleCode() . "-1.jpg"?>" alt="">
					<?php if ($product->getPromo()): ?>
						<span class="badge bg-danger">Soldes</span>
					<?php endif; ?>
					<div class="card-body text-center">
						<?php if ($product->getPromo()): ?>
							<h2 class="card-text"><?=$product->getPromo()?>€</h2>
							<span><h2 class="card-text"><strike><?=$product->getPrice()?>€</strike></h2></span>
							<h3 class="card-text"><?=$product->getName()?></h3>
						<?php else: ?>
							<h2 class="card-text"><?=$product->getPrice()?>€</h2>
						<?php endif; ?>

						<h3 class="card-text"><?=$product->getName()?></h3>
					</div>
					<div class="card-footer text-center">
						<a class="btn btn-light" href=<?= URL."shop/model/".$product->getId()?> >Voir</a>
					</div>
				</div>
		<?php endforeach; ?>
		</div>
	</div>
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
