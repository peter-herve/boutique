<div class="container">
	<div class="card">
		<div class="card-header">
			<h1>Vos commandes : </h1>
		</div>
		<div class="card-body">
			<?php foreach ($commandes as $commande): ?>
				<?php $total = 0; ?>
				<div class="card mb-3">
					<div class="card-header">
						<h2>Commande référence :  <?=$commande['id']?></h2>
					</div>
					<div class="card-body">
						<h3>Status de la commande : <strong><?=$commande['status']?></strong></h3>
						<h4>Détail de la commande :</h4>
						<table class="table">
							<tr>
								<th>Ref article</th>
								<th>Quantité</th>
								<th>Taille</th>
								<th>Prix</th>
							</tr>
							<?php foreach ($model->getCommandDetails($commande['id']) as $article): ?>
								<?php $total += floatval(str_replace(',', '.',$article['article_price'])); ?>
								<tr>
									<td><a href="<?=URL."shop/model/".$article['article_id']?>"><?=$article['article_id']?></a> </td>
									<td><?=$article['nb_pcs']?></td>
									<td><?=$article['article_size']?></td>
									<td><?=$article['article_price']?></td>
								</tr>
							<?php endforeach; ?>
							<tr>
								<td></td>
								<td></td>
								<td>Total :</td>
								<td><strong> <?= $total?> EUR</strong></td>
							</tr>

						</table>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
