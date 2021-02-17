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

		//echo $root.'</br>';

        define('HOST', 'http:/'.__DIR__.'/');
        define('ROOT', '/'.__DIR__.'/');

		//echo ROOT;

        define('CONTROLLER', ROOT.'controller/');
        define('VIEW', ROOT.'view/');
        define('MODEL', ROOT.'model/');
        define('CLASSES', ROOT.'classes/');


        //define('ASSETS', ROOT.'assets/');
		define('ASSETS', 'assets/');
		define('CSS', 'assets/css');
		define('ICONS', ASSETS.'icons/');
		define('LOGOS', ASSETS.'logos/');
		define('MENU', ASSETS.'menu/');
    }

    public static function autoload($class)
    {
        if(file_exists(MODEL.$class.'.php'))
        {
            include_once (MODEL.$class.'.php');
        } else if (file_exists(CLASSES.$class.'.php'))
        {
            include_once (CLASSES.$class.'.php');
        } else if (file_exists(CONTROLLER.$class.'.php'))
        {
            include_once (CONTROLLER.$class.'.php');
        } ;

    }
}
