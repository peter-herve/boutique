<?php
$user = [
	'connected' 	=> False,
	'name'			=> "Samir",

]

?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title><?= $this->page ?></title>
		<link rel="stylesheet" type="text/css" href="<?= CSS ?>/<?= mb_strtolower($this->page) ?>.css">
		<script type="text/javascript">
			function Hide (addr) { document.getElementById(addr).style.display = "none";	}
			function Show (addr) { document.getElementById(addr).style.display = "block";	}

			function toggle(anId)
			{
				if (document.getElementById(anId).style.display == "none")	{	Show(anId);	}
				else														{	Hide(anId);	}
			}

			window.onload = function () {
				Hide("menu_list")
				Hide("search_form");
			};
		</script>
	</head>
	<header>
		<a href="home">
			<img class="logo" src="<?= LOGOS.'le_dressing_small.jpg'?>" height="100px" alt="Le dressing - Vêtements de prestige" title="Accueil">
		</a>
		<hr>
		<nav>
			<div class="menu">
				<div class="icon">
					<img src="<?= ICONS.'menu_close.svg'?>" alt="Menu" title="Menu" onclick="toggle('menu_list')">
				</div>

			</div>

			<div class="user">
				<div class="icon icon_search">
					<img src="<?= ICONS.'search.svg'?>" alt="Rechercher" title="Rechercher" onclick="toggle('search_form')">
				</div>
				<form id="search_form" class="search" action="search" method="get">
					<input type="text" name="search">
				</form>
				<div class="icon profil">
					<img src="<?= ICONS.'profil.svg'?>" alt="Profil" title="Profil">
				</div>
				<div class="profil">
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
				<div class="icon panier">
					<img src="<?= ICONS.'basket.svg'?>" alt="Panier" title="Panier">
				</div>
			</div>

		</nav>

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
		<hr>
	</header>
	<body>
