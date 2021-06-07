<?php

if(!defined('DBHOST') )
	define('DBHOST', 'localhost');

if(!defined('DBUSER') )
	define('DBUSER', 'root');

if(!defined('DBPASS'))
	define('DBPASS', '');

if(!defined('DBNAME'))
	define('DBNAME', 'home_appliances');

if(!defined('CHARSET'))
	define('CHARSET', 'utf8mb4');

if(!defined('COLLATE'))
	define('COLLATE', 'utf8mb4_general_ci');

if(!defined('SITE_URL'))
	define('SITE_URL', 'http://localhost/WebP/');

$dbHost = DBHOST;
$dbUser = DBUSER;
$dbPass = DBPASS;
$dbName = DBNAME;
$charset = CHARSET;
$collate = COLLATE;

$SITE_URL = SITE_URL;

$softSetup = false;



if( ! defined('LOGIN_DEADLINE') )
	define( 'LOGIN_DEADLINE', 30 );  // days

if( ! defined('ACTIVITY_DEADLINE') )
	define( 'ACTIVITY_DEADLINE', 30 ); // minutes



if(!defined('ASSETS_URL'))
	define('ASSETS_URL', 'http://localhost/WebP/Assets/');

$Assets_URL = ASSETS_URL;

if(! function_exists("Assets")){

	function Assets ($address){

		return (ASSETS_URL . $address);
	}
}


?>






