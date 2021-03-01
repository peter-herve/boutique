<?php
include_once('_config.php');
session_start();
//Reset controllers
unset($_SESSION['url']);

MyAutoload::start();

// echo "<pre>";
// $class = "Shop";
// MyAutoload::searchClassInDirectory($class, "controller");
// echo "</pre>";

if (isset($_GET['r'])) {
	$url = $_GET['r']; // index.php?r....
}else {
	$url = NULL;
}

//echo "<pre>";



$elements = explode('/', $url);
foreach ($elements as $controller) {
	$_SESSION['url'][] = $controller;
}
// echo "Index :</br>";
// var_dump($_SESSION['url']);
// echo "</br>";

$routeur = new Routeur();
//$routeur->renderController();


//echo "</pre>";
