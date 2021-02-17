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
		<img class="icon" src="<?= ICONS.'basket.svg'?>" alt="Panier" title="Panier">
	</nav>
	<hr>
	<!-- Menu -->
	<menu id="menu_list">
		<ul class="menu_list" >
			<?php $dir = scandir('assets/menu')?>
			<?php foreach ($dir as $file => $name): ?>
				<?php if ($file > 1): ?>
					<li><a href="shop/<?=$name?>" title="<?=$name?>"><img src="<?= 'assets/menu/'.$name;?>" alt="<?=$name?>"></a></li>
				<?php endif; ?>
			<?php endforeach; ?>
		</ul>
	</menu>
</header>
