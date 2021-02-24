<main>
	<section>
		<h1>Détails client : </h1>
		<?php var_dump($this->data) ?>
		<?php foreach ($this->data as $key => $value): ?>
			<div class="key">
				<?= $key ?>
			</div>
			<div class="value">
				<?= $value ?>
			</div>
		<?php endforeach; ?>
	</section>
</main>
