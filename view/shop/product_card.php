<div class="card mb-3">
	<a href="<?= URL."shop/model/".$product->getId()?>"><img class="card-img-top" src="<?=URL."img/store/" .  $product->getArticleCode(). "/" . $product->getArticleCode() . "-1.jpg"?>" alt=""></a>
	<div class="card-body">
		<h3 class="card-text font-first"><?=$product->getName()?></h3>

		<?php if ($product->getPromo()): ?>
			<p class="card-text text-end">Soldes</p>
			<?php if ($product->getPromo()): ?>
				<h4 class="card-text font-sec"><?=$product->getPromo()?>EUR <span><strike class="strike-sm text-muted"><?=$product->getPrice()?>EUR</strike></span></h4>
			<?php endif; ?>
		<?php else: ?>
			<h2 class="card-text font-sec"><?=$product->getPrice()?>EUR</h2>
		<?php endif; ?>
	</div>
</div>
