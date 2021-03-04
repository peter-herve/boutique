

<div class="modele">
	<div class="images">
		<img class="principale" src="<?=URL."img/store/" .  $this->data[0]['article_code']. "/" . $this->data[0]['article_code'] . "-1.jpg"?>" alt="">
		<div class="miniatures">
			<img class="miniature" src="https://via.placeholder.com/60x90" alt="">
			<img class="miniature" src="https://via.placeholder.com/60x90" alt="">
			<img class="miniature" src="https://via.placeholder.com/60x90" alt="">
			<img class="miniature" src="https://via.placeholder.com/60x90" alt="">
			<img class="miniature" src="https://via.placeholder.com/60x90" alt="">
		</div>
	</div>

	<div class="infoProduit">
		<h1 class="nom"><?=$this->data[0]['article_name']?></h1>
		<h2 class="prix"><?=$this->data[0]['article_price']?>€</h2>
		<h3 class="marque">Marque</h3>
		<a class="acheter" href="order/<?=$this->code?>">Acheter</a>
        <a class="acheter" href="basket/<?=$this->code?>">Acheter</a>
		<p class="description"><?=$this->data[0]['article_description']?></p>
	</div>
</div>
<div class="comments">
	<h2>Vos avis</h2>
	<?php if ($comments): ?>
		<?php foreach ($comments as $comment): ?>
			<h3>De <?=$comment->getUserName()?> :</h3>
			<p><?= $comment->getComment()?></p>
		<?php endforeach; ?>
	<?php endif; ?>
</div>
<div class="addComment">
	<?php if (isset($_SESSION['user'])): ?>
		<form class="commentaireProduit" action="<?= URL."shop/model/".$this->data[0]['article_code']."/addComment"?>" method="post">
			<label for="comment">Donnez nous votre avis :</label></br>
			<input type="textarea" name="comment" value="">
			<input type="submit" name="commentAdd" value="Ajouter ce commentaire">
		</form>
	<?php else: ?>
		<h4>Veuillez vous connecter pour laisser un commentaire</h4>
	<?php endif; ?>
</div>
