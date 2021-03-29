<header>

<div class="container-md">
	<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
		<div class="container-fluid">
			<a class="navbar-brand" href="<?=URL."home"?>">
				<img class="logo" src="<?= LOGOS.'le_dressing_small.jpg'?>" height="80px" alt="Le dressing - Vêtements de prestige" title="Accueil">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<?php if ($this->pageTitle == "Shop"): ?>
							<a class="nav-link active" aria-current="page" href="<?=URL."shop"?>" >Boutique</a>
						<?php else: ?>
							<a class="nav-link" href="<?=URL."shop"?>" >Boutique</a>
						<?php endif; ?>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Catégories
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<?php foreach ($categories as $cat): ?>
								<li><a class="dropdown-item" href="<?= URL."shop/search?".$cat['category_name']."=1&shopsearch=rechercher"?>"><?= ucfirst ($cat['category_name'])?></a></li>
							<?php endforeach; ?>
						</ul>
					</li>
					<li class="nav-item">
						<?php if ($this->pageTitle == "Soldes"): ?>
							<a class="nav-link active" href="<?=URL."shop/soldes" ?>">Soldes</a>
						<?php else: ?>
							<a class="nav-link" href="<?=URL."shop/soldes" ?>">Soldes</a>
						<?php endif; ?>
					</li>
					<li class="nav-item">
						<?php if ($this->pageTitle == "Nouveautés"): ?>
							<a class="nav-link active" href="<?=URL."shop/new"?>">Nouveautés</a>
						<?php else: ?>
							<a class="nav-link" href="<?=URL."shop/new"?>">Nouveautés</a>
						<?php endif; ?>
					</li>

					<!-- USER -->
					<?php if (isset($_SESSION['user'])): ?>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								<?= ucfirst ($_SESSION['user']->getPrenom())?>
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="<?=URL?>profil">Mon Profil</a></li>
								<li><a class="dropdown-item" href="<?=URL?>order/history">Mes commandes</a></li>
								<li><a class="dropdown-item" href="<?=URL?>user/like">Mes coups de coeur</a></li>
								<li><hr class="dropdown-divider"></li>
								<?php if ($_SESSION['user']->isAdmin()): ?>
									<li><a class="dropdown-item" href="<?=URL."admin"?>">Admin</a></li>
								<?php endif; ?>
								<li><a class="dropdown-item" href="<?=URL?>connexion">Déconnexion</a></li>
							</ul>
						</li>
					<?php else: ?>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Connexion / Inscription
							</a>
							<div class="dropdown-menu">
								<form action="<?=URL?>connexion" method="post" class="p-4" aria-labelledby="navbarDropdown">
									<div class="mb-6">
										<input class="form-control me-2" type="text" name="login" placeholder="Login" aria-label="Login">
										<input class="form-control me-2" type="password" name="password" placeholder="Mot de passe" aria-label="Mot de passe">
										<button class="btn btn-outline-success" type="submit" name="submit">Se Connecter</button>
									</div>
								</form>
								<div class="mb-6">
									<a class="btn btn-outline-success" href="<?= URL?>inscription">S'inscrire</a>
								</div>
							</div>

						</li>
					<?php endif; ?>

					<!-- PANIER -->
					<button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
						<span class="material-icons">shopping_cart</span><span class="badge bg-secondary"><?=Basket::countCookieArticle()?></span>
					</button>
					<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" data-bs-backdrop="false" data-bs-scroll="true">
						<div class="offcanvas-header">
							<h5 id="offcanvasRightLabel">Votre Panier :</h5>
							<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
						</div>
						<div class="offcanvas-body">
							<?php foreach (Basket::detailBasketHeader() as $product): ?>
								<div class="card mb-3" style="max-width: 540px;">
									<div class="row g-0">
										<div class="col-md-4">
											<a href="<?=URL?>shop/model/<?=$product->getId()?>"><img class="card-img-top" src="<?=URL."img/store/".$product->getArticleCode()."/".$product->getArticleCode()."-1.jpg"?>" width="240px"  alt="produit"></a>
										</div>
										<div class="col-md-8">
											<div class="card-body">
												<h5 class="card-title"><?=$product->getName()?></h5>
												<p class="card-text"><?= $product->getPrice()?>€</p>
												<p class="card-text"><small class="text-muted">x <?= $product->getQuantity()?></small></p>
											</div>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>


				</ul>
				<form class="d-flex" action="<?=URL?>shop/search" method="get">
						<!-- <input type="text" name="search">
						<input type="submit" name="mainSearch" value="1"> -->
						<input class="form-control me-2" type="text" name="search" placeholder="Rechercher" aria-label="Search" required>

						<button class="btn btn-outline-secondary" type="submit" name="mainSearch"><i class="material-icons">search</i></button>
				</form>
			</div>
		</div>
	</nav>

</header>
<main>
