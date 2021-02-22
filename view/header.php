<?php
$user = [
	'connected' 	=> False,
	'name'			=> "Samir",

]
?>


<header>
	<!-- Logo -->
	<a href="home">
		<img class="logo" src="<?= LOGOS.'le_dressing_small.jpg'?>" height="100px" alt="Le dressing - Vêtements de prestige" title="Accueil">
	</a>

	<!-- Navigation -->
	<nav>
		<!-- Menu Logo -->
		<img class="icon" src="<?= ICONS.'menu_close.svg'?>" alt="Menu" title="Menu" onclick="toggle('menu_list')">

		<!-- Research -->
		<div class="research">
			<img class="icon" src="<?= ICONS.'search.svg'?>" alt="Rechercher" title="Rechercher" onclick="toggle('search_form')">
			<form id="search_form" class="search" action="search" method="get">
				<input type="text" name="search">
			</form>
		</div>


		<!-- Profil -->
		<div class="profil">
			<img class="icon" src="<?= ICONS.'profil.svg'?>" alt="Profil" title="Profil">

			<?php if ($user['connected']): ?>
				<div class="logged">
					<h3><?= $user['name']?></h3>
				</div>
			<?php else: ?>
				<div class="unlogged">
					<h3><a href="connexion" title="Se connecter">Connexion</a> / <a href="inscription" title="S'inscrire">Inscription</a></h3>
				</div>
			<?php endif; ?>
		</div>

		<!-- Basket -->
		<div class="basket">
			<img class="icon" src="<?= ICONS.'basket.svg'?>" alt="Panier" title="Panier">
			<div class="number">
				<p><?= $this->basket->getBasketQuantity() ?></p>
			</div>
		</div>
	</nav>
	<hr>
	<!-- Menu -->
	<div id="menu_list">
		<div class="menu_list">
			<div class="menu_rubrique">
				<h3>Soldes</h3>
				<ul>
					<li>Chemises</li>
					<li>Pulls</li>
					<li>Pantalons</li>
					<li>Chaussures</li>
				</ul>
			</div>
			<div class="menu_rubrique">
				<h3>Inspirations</h3>
				<ul>
					<li>Chemises</li>
					<li>T-shirts</li>
					<li>Pulls</li>
					<li>Sweats</li>
					<li>Pantalons</li>
					<li>Jeans</li>
					<li>Chaussures</li>
				</ul>
			</div>
			<div class="menu_rubrique">
				<h3>Marques</h3>
				<ul>
					<li>Lanvin</li>
					<li>Dior</li>
					<li>Chanel</li>
					<li>Voir toutes les marques</li>
				</ul>
			</div>
			<div class="menu_rubrique">
				<h3>Matières</h3>
				<ul>
					<li>Coton</li>
					<li>Gaz de Coton</li>
					<li>Cachemire</li>
					<li>Laine</li>
					<li>Soie</li>
				</ul>
			</div>
		</div>
	</div>
</header>
