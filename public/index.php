<?php


include_once '../classes/EntryPoint.php';
	$uri = strtok(ltrim($_SERVER['REQUEST_URI'], '/'), '?');
if ($uri == '') {
$uri = 'tablas/home';
}


	$entryPoint = new EntryPoint();
	$entryPoint->run($uri);





 ?>