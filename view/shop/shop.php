<div class="col-md-10 order-sm-first">




<!-- <section>
	<div class="container-md"> -->
		<div class="card border-light">
			<div class="card-header">
				<h2 class="card-title">Meilleures ventes :</h2>
			</div>
			<div class="card-body">
				<?php foreach ($this->bestSells as $product): ?>
					<div class="container-md d-flex">
						<div class="card" style="width: 18rem;">
							<img class="card-img-top" src="<?=URL."img/store/" .  $product->getArticleCode(). "/" . $product->getArticleCode() . "-1.jpg"?>" alt="">
							<div class="card-body text-center">
								<?php if ($product->getPromo()): ?>
									<h2 class="card-text"><?=$product->getPromo()?>€</h2>
									<span><h2 class="card-text"><strike><?=$product->getPrice()?>€</strike></h2></span>
								<?php else: ?>
									<h2 class="card-text"><?=$product->getPrice()?>€</h2>
								<?php endif; ?>

								<h3 class="card-text"><?=$product->getName()?></h3>
							</div>
							<div class="card-footer">
								<a class="btn btn-light" href=<?= URL."shop/model/".$product->getId()?> >Consulter</a>
							</div>
						</div>
					</div>

				<?php endforeach; ?>
			</div>
		</div>
	<!-- </div>
</section> -->

<!-- <section>
	<div class="container-md"> -->
		<div class="card border-light">
			<div class="card-header">
				<h2 class="card-title">Nos Soldes :</h2>
			</div>
			<div class="card-body">
				<div class="card-group">
				<?php foreach ($this->soldes as $product): ?>
						<div class="card" style="max-width: 18rem;">
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
	<!-- </div>
</section> -->

<!-- <section>
	<div class="container-md"> -->
		<div class="card border-light">
			<div class="card-header">
				<h2 class="card-title">Nouveautés :</h2>
			</div>
			<div class="card-body">
				<div class="card-group">
				<?php foreach ($this->new as $product): ?>
						<div class="card" style="max-width: 18rem;">
							<img class="card-img-top" src="<?=URL."img/store/" .  $product->getArticleCode(). "/" . $product->getArticleCode() . "-1.jpg"?>" alt="">
							<span class="badge bg-success">Nouveauté</span>
							<div class="card-body text-center">
								<?php if ($product->getPromo()): ?>
									<h2 class="card-text"><?=$product->getPromo()?>€</h2>
									<span><h2 class="card-text"><strike><?=$product->getPrice()?>€</strike></h2></span>
									<h3 class="card-text"><?=$product->getName()?></h3>
								<?php else: ?>
									<h2 class="card-text"><?=$product->getPrice()?>€</h2>
								<?php endif; ?>
							</div>
							<div class="card-footer text-center">
								<a class="btn btn-light" href=<?= URL."shop/model/".$product->getId()?> >Voir</a>
							</div>
						</div>
				<?php endforeach; ?>
				</div>
			</div>
		</div>
	<!-- </div>
</section> -->



</div>
</div>
</div>
