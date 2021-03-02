<header>
	<!-- Logo -->
	<a href="home">
		<img class="logo" src="<?= LOGOS.'le_dressing_small.jpg'?>" height="100px" alt="Le dressing - Vêtements de prestige" title="Accueil">
	</a>

	<!-- Navigation -->
	<nav>
		<!-- Menu Logo -->
		<img class="icon" src="<?= ICONS.'menu_close.svg'?>" alt="Menu" title="Menu" onclick="toggle('menu_list')">

		<div class="menu_items">
			<!-- Research -->
			<div class="research">
				<img class="icon" src="<?= ICONS.'search.svg'?>" alt="Rechercher" title="Rechercher" onclick="toggle('search_form')">
				<form class="search" action="search" method="get">
					<input type="text" name="search">
				</form>
			</div>


			<!-- Profil -->
			<div class="profil">
				<img class="icon" src="<?= ICONS.'profil.svg'?>" alt="Profil" title="Profil">
				<div class="profil_actions">
					<?php if (isset($_SESSION['user'])): ?>
						<div class="logged">
							<h3>Bonjour <?= $_SESSION['user']->getPrenom()?> !</h3>
							<ul>
								<li><a href="profil">Mon Profil</a></li>
								<li><a href="connexion">Déconnexion</a></li>
								<li><a href="order?userid=<?= $_SESSION['user']->getId()?>">Mes commandes</a></li>
								<li><a href="#">Aide</a></li>
								<li><a href="#">Politique de confidentialité</a></li>
							</ul>
						</div>
					<?php else: ?>
						<!-- Connexion -->
						<form class="connexion" action="connexion" method="post">
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
							<input type="submit" name="submit" value="Se connecter">
							<!-- <button type="submit" name="connexion">Se connecter</button> -->
						</form>
						<!-- inscription -->
						<div class="inscription">
							<h3>Nouveau ?</h3>
							<a class="button" href="inscription" title="S'inscrire">Inscription</a></h3>
						</div>

					<?php endif; ?>
				</div>
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
						<h3>Total : 44,80€</h3>
						<a href="order">Commander</a>
					</div>
				</div>
			</div>
		</div>
	</nav>
	<hr>


	<!-- Menu -->
	<div id="menu_list" style="display: none">
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
<main>
