<div class="container">
	<div class="card">
		<div class="card-header">
			<h1>Vos commandes : </h1>
		</div>
		<div class="card-body">
			<?php foreach ($commandes as $commande): ?>
				<div class="card mb-3">
					<div class="card-header">
						<h2>Commande référence :  <?=$commande['order_id']?></h2>
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
							<tr>
								<td><a href="<?=URL."shop/model/".$commande['article_id']?>"><?=$commande['article_id']?></a> </td>
								<td><?=$commande['nb_pcs']?></td>
								<td><?=$commande['article_size']?></td>
								<td><?=$commande['article_price']?></td>
							</tr>
						</table>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
