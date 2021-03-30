<header>
	<!-- Logo -->
	<a href="<?=URL."home"?>">
		<img class="logo" src="<?= LOGOS.'le_dressing_small.jpg'?>" height="100px" alt="Le dressing - Vêtements de prestige" title="Accueil">
	</a>

	<!-- Navigation -->
	<nav>
		<!-- Menu Logo -->
		<a href="<?=URL."shop"?>" >Boutique</a>
		<a href="<?=URL."shop/soldes" ?>">Soldes</a>
		<a href="<?=URL."shop/new"?>">Nouveautés</a>


		<?php if (isset($_SESSION['user'])): ?>
			<?php if ($_SESSION['user']->isAdmin()): ?>
				<a href="<?=URL."admin"?>">Admin</a>
			<?php endif; ?>
		<?php endif; ?>

		<div class="menu_items">
			<!-- Research -->
			<div class="research">
				<img class="icon" src="<?= ICONS.'search.svg'?>" alt="Rechercher" title="Rechercher" onclick="toggle('search_form')">
				<form class="search" action="<?=URL?>shop/search" method="get">
					<input type="text" name="search">
					<input type="submit" name="mainSearch" value="1">
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
								<li><a href="<?=URL?>profil">Mon Profil</a></li>
								<li><a href="<?=URL?>connexion">Déconnexion</a></li>
								<li><a href="<?=URL?>order/history?>">Mes commandes</a></li>
								<li><a href="#">Aide</a></li>
								<li><a href="#">Politique de confidentialité</a></li>
							</ul>
						</div>
					<?php else: ?>
						<!-- Connexion -->
						<form class="connexion" action="<?=URL?>connexion" method="post">
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
							<a class="button" href="<?=URL?>inscription" title="S'inscrire">Inscription</a></h3>
						</div>

					<?php endif; ?>
				</div>
			</div>

			<!-- Basket -->
			<div class="basket">
				<img class="icon" src="<?= ICONS.'basket.svg'?>" alt="Panier" title="Panier">
				<div class="number">
					<?php
                        if (!isset($_SESSION['user']))
                        {
                            if (isset($_COOKIE['basket']))
                            {
                                echo "<p>".Basket::countCookieArticle()."</p>";
                            }
                            else{
                                echo "0";
                            }
                        }
                        else{
                    echo(count(Basket::detailBasketHeader()));
                    }
                        ?>
				</div>
				<div class="basket_list">
                    <?php
                        if (!empty(Basket::detailBasketHeader())){
                            foreach (Basket::detailBasketHeader() as $value)
                    {?>
					<div class="product">
						<a href="product/shop/model/<?=$value->getArticleCode()?>"><img src="<?=URL."img/store/".$value->getArticleCode()."/".$value->getArticleCode()."-1.jpg"?>" width="80px" alt="produit"></a>
						<span><?=$value->getQuantity()?></span>
						<div class="specifications">
							<h4><?=$value->getName()?></h4><span><?=$value->getPrice()?>€</span>
						</div>
					</div>
                    <?php
                    }
                    }
                    else
                    {
                    ?>
                    <div class="product">
                       <p>Aucun produit dans le panier</p>
                    </div>
                    <?php
                    }
                    ?>
					<div class="basket_summary">
                        <a href=<?=URL."order"?>>Commander</a>
                        <?php
                        if (!isset($_SESSION['user']))
                        {
                            if (isset($_COOKIE['basket']))
                            {
                                echo "<h3>TOTAL:".Basket::SumPriceBasket()."</h3>";

                            }
                            else {
                                echo "0";
                            }
                        }
                        elseif (!empty(Basket::detailBasketHeader())){
                            $count=[];
                            foreach (Basket::detailBasketHeader() as $value)
                            {
                                $qty = intval($value->getQuantity());
                                $price = floatval(str_replace(',', '.', $value->getPrice()));
                                array_push($count, $qty*$price);
                            }
                            echo array_sum($count);
                        }

                        ?>
					</div>
				</div>
			</div>
		</div>
	</nav>
	<hr>


	<!-- Menu -->
	<div id="cat_list" style="display: none">
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
