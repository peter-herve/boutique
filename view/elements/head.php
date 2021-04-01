<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description"  content="Le dressing boutique de prêt à porter pour homme, vêtements de qualité pour homme">
        <meta name="keywords" content="Vêtements, Homme,Polo Homme, T-shirt Homme"/>
		<title>Le Dressing - <?= $this->pageTitle ?> - Le plus grand choix</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <?php foreach ($this->cssList as $css): ?>
			<link  rel="stylesheet" type="text/css" href="<?=$css?>">
		<?php endforeach; ?>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
		<!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;1,100;1,300;1,400&display=swap" rel="stylesheet">
		<script type="text/javascript">
			function Hide (addr) { document.getElementById(addr).style.display = "none";	}
			function Show (addr) { document.getElementById(addr).style.display = "block";	}

			function toggle(anId)
			{
				if (document.getElementById(anId).style.display == "none")	{	Show(anId);	}
				else														{	Hide(anId);	}
			}

		</script>
	</head>
	<body>
