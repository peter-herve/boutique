<?php
include_once('_config.php');

MyAutoload::start();

if (isset($_GET['r'])) {
	$url = $_GET['r']; // index.php?r....
}else {
	$url = NULL;
}

//echo "<pre>";

    $routeur = new Routeur($url);
    $routeur->renderController();


//echo "</pre>";
