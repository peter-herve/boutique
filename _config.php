<?php
/*** configuration *****/
ini_set('display_errors','on');
error_reporting(E_ALL);


class MyAutoload
{
    public static function start()
    {

        spl_autoload_register(array(__CLASS__, 'autoload'));

        //$root = $_SERVER['DOCUMENT_ROOT'];
        //$host = $_SERVER['HTTP_HOST'];

        define('HOST', 'http://localhost/'.__DIR__.'/');
        define('ROOT',  __DIR__.'/');

        define('CONTROLLER', ROOT.'controller/');
        define('VIEW', ROOT.'view/');
        define('MODEL', ROOT.'model/');
        define('CLASSES', ROOT.'classes/');


		define('URL', 'http://localhost/'.basename(getcwd()).'/');
		define('IMG', __DIR__.'/img/store/');

		define('ASSETS', 'http://localhost/'.basename(getcwd()).'/'.'assets/');
		define('CSS', ASSETS.'/'.'css/');

		define('ICONS', ASSETS.'icons/');
		define('LOGOS', ASSETS.'logos/');
		define('MENU', ASSETS.'menu/');
	}


	public static function autoload($class)
    {
		self::searchClassInDirectory($class, MODEL);
		self::searchClassInDirectory($class, CLASSES);
		self::searchClassInDirectory($class, CONTROLLER);

    }

	public function FunctionName($value='')
	{
		$var = __DIR__;
		echo $var;
		$tab = explode("/",$var);
		$path = 'localhost/';
		$signal = 0;
		for ($i = 0; $i != count($tab); $i++){
			if ($signal == 1)
			$path = $path.$tab[$i].'/';
			if ($tab[$i] == "www")
			$signal = 1;
		}
		var_dump($path);
	}

	public static function searchClassInDirectory($class, $directory)
	{
		$child = false;
		//echo $directory."</br>";
		if ($file = file_exists($directory.$class.'.php')) {
			//echo  "Class : ".$class." </br>Trouvé dans le répertoire : ".$directory;
			include_once ($directory.$class.'.php');
			return True;
		}
		else {
			$elements = scandir($directory);
			//var_dump($elements);
			foreach ($elements as $element) {
				//echo 'controller/'.$element.'</br>';
				if (is_dir($directory.'/'.$element) && $element !== '.' && $element !== '..') {
					//echo "Nouveau Répertoire détecté : ".$element;
					$path = $directory.'/'.$element.'/';
					if (MyAutoload::searchClassInDirectory($class, $path)) {
						return True;
					}
				}
			}
			return False;
		}
	}
}
