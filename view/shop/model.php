
<div class="card mb-3">
	<div class="row g-0">
		<div class="col-md-4">
			<img class="img-fluid" src="<?=URL."img/store/" .  $this->article->getArticleCode(). "/" . $this->article->getArticleCode() . "-1.jpg"?>" alt="<?= $this->article->getDescription() ?>">
		</div>
		<div class="col-md-2">
			<img class="img-fluid" src="<?=URL."img/store/" .  $this->article->getArticleCode(). "/" . $this->article->getArticleCode() . "-2.jpg"?>" alt="<?= $this->article->getDescription() ?>">
			<img class="img-fluid" src="<?=URL."img/store/" .  $this->article->getArticleCode(). "/" . $this->article->getArticleCode() . "-3.jpg"?>" alt="<?= $this->article->getDescription() ?>">
		</div>
		<div class="col-md-6">
			<div class="card-body">
				<div class="d-flex flex-column justify-content-between">
					<div class="row">
						<div class="col-8">
							<h5 class="card-title"><?=$this->article->getName()?></h5>
							<h2 class="cart-text float-end"><?=$this->article->getPrice()?>€</h2>
							<p class="card-text"><small class="text-muted"><?= $this->article->getDescription() ?>.</small></p>

							<div class="infoProduit">
								<?php if (isset($_SESSION['user'])): ?>
									<span class="material-icons" style="background-color: <?= $retVal = ($userLikes) ?  'green' :  '' ; ?>"><a href="<?=URL."like/".$this->article->getId()?>">thumb_up_off_alt</a></span>
									<?=  $this->article->getId()?>
								<?php endif; ?>
								<?php if ($this->article->getNbLikes()): ?>
									<p><?= $this->article->getNbLikes() ?> clients ont aimé ce produit</p>
								<?php endif; ?>
								<div class="row">
									<div class="col">
										<form method="post" action=<?=URL."buy"?>>
											<?php if ($sizes != NULL): ?>
												<select name="size" class="form-select">
													<!-- <option selected>Taille...</option> -->
													<?php foreach ($sizes as $product): ?>
														<option name="article_size" value="<?= $product->getSize()?>" ><span><p><?= $product->getSize()?></p></span><span><p> :<?= $product->getStock()?> en stock</p></span></option>
													<?php endforeach; ?>
												</select>
											<?php endif; ?>
											<input type="number" min="1" max="10" value="1" name="article_qty">
											<input type="hidden" name="article_code" value="<?=$this->article->getArticleCode()?>">
											<input type="hidden" name="article_price" value="<?=$this->article->getPrice()?>">
											<input class="form-control" type="hidden" name="article_id" value="<?=$this->article->getId()?>">
										</div>
										<div>
											<input class="form-control btn btn-secondary" type="submit" name="basket" value="Panier">
										</div>
										<div>
											<input class="form-control btn btn-secondary" type="submit" name="order" value="Commande">
										</div>
									</form>
								</div>
							</div>
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

<div class="container-md">
	<h2 class="card-title">Nos clients ont aussi consulté :</h2>

		<div class="row row-cols-3" >

			<?php foreach ($alt_products as $product): ?>
			<div class="col">
				<?= $this->getProductCard($product)?>
			</div>
			<?php endforeach; ?>

		</div>

</div>
