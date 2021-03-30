
<!-- <hr>
<h1 class="pageTitle">Resultats de votre recherche :</h1>
<hr> -->

<div class="col-md-10 order-sm-first">

	<h2 class=" font-first">Résultats</h2>
	<div class="container" >
	<div class="row row-cols-3" >

		<?php foreach ($products as $product): ?>
		<div class="col">
			<?= $this->getProductCard($product)?>

		</div>
		<?php endforeach; ?>

	</div>
	</div>



</div>
