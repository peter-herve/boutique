

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
		<h2 class="prix"><?=$this->data[0]['article_price']?></h2>
		<h3 class="marque">Marque</h3>
		<a class="acheter" href="order/<?=$this->code?>">Acheter</a>
        <a class="acheter" href="basket/<?=$this->code?>">Acheter</a>
		<p class="description"><?=$this->data[0]['article_description']?></p>
	</div>
</div>
