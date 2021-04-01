

<div class="col-md-12 order-sm-first">

	<h2 class=" font-first">Vos coups de coeur</h2>
	<div class="container" >
	<div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-1" >

		<?php foreach ($products as $product): ?>
		<div class="col">
			<?= $this->getProductCard($product)?>

		</div>
		<?php endforeach; ?>

	</div>
	</div>



</div>
