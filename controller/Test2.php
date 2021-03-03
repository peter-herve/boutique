<?php

/**
 *
 */
class Test2 extends Home
{

	function __construct()
	{
		\array_splice($_SESSION['url'], 0, 1);
		echo "Deuxieme controller!!!</br>";
		echo "qui doit faire : ".$_SESSION['url'][0];
	}
}
