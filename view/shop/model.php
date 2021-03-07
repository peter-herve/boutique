

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
		<a class="acheter" href=<?="model?code=" . $this->code . "&basket=1"?>>Acheter</a>
		<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
</div>
