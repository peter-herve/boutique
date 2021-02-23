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
					<div class="connexion_container">
						<!-- Connexion -->
						<button type="button" name="connexion" onclick="toggle('connexion')">Connexion</button>

						<div  class="connexion">
							<form class="connex_form" action="connexion" method="post">
								<div class="login_pass">
									<div class="form_zone">
										<label for="login">Login</label>
										<input type="text" name="login" required>
									</div>
									<div class="form_zone">
										<label for="password">Mot de passe</label>
										<input type="password" name="password" required>
									</div>
								</div>
								<button type="submit" name="connexion">Se connecter</button>
							</form>
						</div>
					</div>
					<h3><a href="connexion" title="Se connecter" class="connexion_button">Connexion</a> / <a href="inscription" title="S'inscrire">Inscription</a></h3>
				</div>
			<?php endif; ?>
		</div>

		<!-- Basket -->
		<div class="basket">
			<img class="icon" src="<?= ICONS.'basket.svg'?>" alt="Panier" title="Panier">
			<div class="number">
				<p><?= $this->basket->getBasketQuantity() ?></p>
			</div>
			<div class="basket_list">
				<div class="product">
					<a href="product/id"><img src="https://via.placeholder.com/80" alt="produit"></a>
					<span>x2</span>
					<div class="specifications">
						<h4>Nom du produit</h4><span>29,90€</span>
					</div>
				</div>
				<div class="product">
					<a href="product/id"><img src="https://via.placeholder.com/80" alt="produit"></a>
					<span>x1</span>
					<div class="specifications">
						<h4>Nom du produit</h4><span>14,90€</span>
					</div>
				</div>
				<div class="basket_summary">
					<h1>total : 44,80€</h1>
					<a href="order">Commander</a>
				</div>
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
