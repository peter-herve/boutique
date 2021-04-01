<div class="col-md-10 order-first">

<!--
		<h2 class="font-first">Meilleures ventes :</h2>

		<div class="container" >
		<div class="row row-cols-md-3 row-cols-sm-1" >

			<?php foreach ($this->bestSells as $product): ?>
			<div class="col">
				<?= $this->getProductCard($product)?>
			</div>
			<?php endforeach; ?>

		</div>
		</div> -->



		<h2 class=" font-first">Nos Soldes :</h2>
		<div class="container" >
		<div class="row row-cols-md-3 row-cols-1" >

			<?php foreach ($this->soldes as $product): ?>
			<div class="col">
				<?= $this->getProductCard($product)?>

			</div>
			<?php endforeach; ?>

		</div>
		</div>


		<h2 class=" font-first">Nouveautés</h2>
		<div class="container" >
		<div class="row row-cols-md-3 row-cols-1" >

			<?php foreach ($this->new as $product): ?>
			<div class="col">
				<?= $this->getProductCard($product)?>

			</div>
			<?php endforeach; ?>

		</div>
		</div>




</div>
</div>
</div>
