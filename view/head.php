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
				Hide("menu_list");
				Hide("search_form");
			};
		</script>
	</head>
	<body>
