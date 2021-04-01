<div class="container-md text-center">
	<img class="img-fluid" src="<?= ASSETS."store/ban_nouv.jpg"?>" width="100%" alt="Bannière soldes - jusqu'à -50%">
</div>

<div class="container-md">
	<h2 class="font-first">Nouveautés</h2>

	<div class="container" >
	<div class="row row-cols-1 row-cols-md-5" >

		<?php foreach ($this->articles as $product): ?>
		<div class="col">
			<?= $this->getProductCard($product)?>
		</div>
		<?php endforeach; ?>

	</div>
	</div>
</div>
