<?php


include_once('_config.php');




MyAutoload::start();

// if (isset($_SESSION['user'])) {
// 	var_dump($_SESSION['user']);
// }

if (isset($_GET['r'])) {
	$url = $_GET['r']; // index.php?r....
}else {
	$url = NULL;
}

if (session_status() != PHP_SESSION_ACTIVE) {
	session_start();
	//Reset controllers
	if (isset($_SESSION['url'])) {
		unset($_SESSION['url']);
	}
}



$elements = explode('/', $url);
foreach ($elements as $controller) {
	$_SESSION['url'][] = $controller;
	//var_dump($_SESSION['url']);
}
// echo "User :</br>";
// var_dump($_SESSION['user']);
// echo "</br>";

$routeur = new Routeur();
//$routeur->renderController();


//echo "</pre>";
