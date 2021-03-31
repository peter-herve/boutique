<div class="container">
	<div class="row text-center">
		<h1>Récapitulatif de votre commande</h1>
	</div>


<table class="table">
    <tr>
        <td>Réf</td>
        <!-- <td>Id</td> -->
        <td>Description</td>
        <td>Quantité</td>
        <td>Prix</td>
        </tr>
    <?php if (isset($this->order_total)):?>
    	<?php foreach ($this->order_total as $value):?>
		    <form method="post" action="<?=URL."order"?>">
		        <tr>
		            <td><?=$value->getArticleCode()?></td>
		            <!-- <td><?=$value->getId()?></td> -->
		            <td><?= $value->getDescription()?></td>
		            <td><?=$value->getQuantity()?></td>
		            <td><?=$value->getPrice()?></td>
		            <input type="hidden" name="article_basket_id" value="<?=$value->getBasketIndex()?>">
		            <?php if(isset($_SESSION['user'])):?>
		                <td><input type="submit" name="drop_article" value="Supprimer du panier"></td>
					<?php endif; ?>
		        </tr>
		<?php endforeach; ?>
		<tr>
			<td></td>
			<!-- <td>Id</td> -->
			<td></td>
			<td>Total</td>
			<td><?= Basket::SumPriceBasket() ?> EUR</td>
		</tr>
		</form>

	<?php endif; ?>

<?php if(isset($_SESSION['user'])):?>
    <!-- <?php foreach ($this->order_total as $value):?> -->
    <form method="post" action="<?=URL."order"?>">
        <input type="hidden" name="article_id[]" value="<?=$value->getId()?>">
        <input type="hidden" name="article_basket_id[]" value="<?=$value->getBasketIndex()?>">
        <input type="hidden" name="article_qty[]" value="<?=$value->getQuantity()?>">
        <input type="hidden" name="article_price[]" value="<?=$value->getPrice()?>">
        <input type="hidden" name="article_size[]" value="<?=$value->getSize()?>">
        <input type="submit" name="submit_order" value="valider la commande">
    </form>
	<!-- <?php endforeach; ?> -->
<?php else:?>


	<div class="row text-center">
		<div class="col-md-4 offset-md-4">
			<div class="row">
				<p>Veuillez vous connecter pour finaliser votre commande.</p>
			</div>

			<div class="row">
				<a class="btn btn-secondary mb-3" href="<?=URL."connexion"?>">Connexion</a>
				<a class="btn btn-secondary mb-3" href="<?=URL."inscription"?>">Inscription</a>
			</div>

		</div>
	</div>


<?php endif; ?>

</table>

<p>Il n'y a aucun produit dans le panier</p>



<?php if(!isset($_SESSION['user'])):?>
	<div class="row text-center">
		<div class="col-md-4 offset-md-4">
			<div class="row">
				<a class="btn btn-secondary mb-3" href="<?=URL."shop"?>">Boutique</a>
			</div>

			<div class="row">
				<a class="btn btn-secondary mb-3" href="<?=URL."connexion"?>">Connexion</a>
				<a class="btn btn-secondary mb-3" href="<?=URL."inscription"?>">Inscription</a>
			</div>

		</div>
	</div>
<?php endif; ?>


</div>
