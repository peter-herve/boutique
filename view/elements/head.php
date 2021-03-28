<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title><?= $this->pageTitle ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <?php foreach ($this->cssList as $css): ?>
			<link  rel="stylesheet" type="text/css" href="<?=$css?>">
		<?php endforeach; ?>
		<!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
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
