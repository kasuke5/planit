<?php
session_start();
define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));
define('WEBROOT', str_replace('index.php', '', $_SERVER['SCRIPT_NAME']));

include(ROOT.'core/functions.php');
include(ROOT.'core/controller.php');
include(ROOT.'core/model.php');

$param = explode('/', $_GET['url']);

$page = (empty($param[0])) ? 'home' : $param[0];
$function = (empty($param[1])) ? 'index' : $param[1];



array_shift($param);
array_shift($param);


/* Var du site */
$title = "Planit";
$view_var = [];

if (file_exists(ROOT.'controllers/'.$page.'.php')){
	include_once(ROOT.'controllers/'.$page.'.php');
	if (function_exists($function))
		call_user_func_array($function, $param);
	else
		echo "erreur 404";//p404();
}
else
	echo "erreur 404"; //p404();
?> 