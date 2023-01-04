<?php

function loadTemplate($templateFileName, $variables) {
	extract($variables);
	ob_start();
	include __DIR__ . '/../templates/' . $templateFileName;
	return ob_get_clean();
}

try {
include __DIR__ . '/../include/conect.php';
	include __DIR__ . '/../classes/dataTables.php';
	include __DIR__ . '/../classes/controllers/TablesController.php';
	include __DIR__ . '/../classes/controllers/UserController.php';

	$tablaBenef = new DataTables($pdo,'datos_benef', 'id_datos_benef');
	$tablaPedi =new DataTables($pdo,'datos_pedido', 'id_datos_pedido');
	$tablaUser = new DataTables($pdo, 'datos_usuarios','id_usuario' );
    $tablaLoc = new DataTables($pdo,'datos_localidad', 'gid');
    $tablaInsti = new DataTables($pdo,'datos_institucion', 'codi_esta');



 


$uri = strtok(ltrim($_SERVER['REQUEST_URI'], '/'), '?');
if ($uri == '') {
$uri = 'tablas/home';
}
$route = explode('/', $uri);
$controllerName = array_shift($route);
$action = array_shift($route);

//echo "URI:"; print_r($uri); echo  '-----' ; echo "Route:"; print_r($route);
//echo "Action: " . $action . '   ' ; echo "Controllername: " . $controllerName;



if ($controllerName === 'user') {
$controller = new UserController($tablaUser,$tablaInsti);
}
else if ($controllerName === 'tablas') {
$controller = new TablesController($tablaBenef, $tablaPedi, $tablaUser, $tablaLoc);
}


//pone en minusculas todo (ninidea para que)....


if ($uri == strtolower($uri)) {
$page = $controller->$action();
} else {
http_response_code(301);
header('location: /' . strtolower($uri));
}



if ($action == strtolower($action) && $controllerName ==strtolower($controllerName)) {
$page = $controller->$action();
} else {
http_response_code(301);
header('location: index.php?controller=' . strtolower($controllerName) .'&action=' . strtolower($action));
}





$title = $page['title'];
$variables = $page['variables'] ?? [];
$output = loadTemplate($page['template'], $variables);


} 



catch (PDOException $e) {
$title = 'Ocurrio un error';
$output = 'Database error: ' . $e->getMessage() . ' in '
. $e->getFile() . ':' . $e->getLine();
}
include  __DIR__ . '/../templates/layout.html.php'; 

/*

include_once '../classes/EntryPoint.php';
	$uri = strtok(ltrim($_SERVER['REQUEST_URI'], '/'), '?');
if ($uri == '') {
$uri = 'tablas/home';
}


	$entryPoint = new EntryPoint();
	$entryPoint->run($uri);


*/


 ?>