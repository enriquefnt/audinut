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

//$TablesController = new TablesController($tablaBenef, $tablaPedi, $tablaUser, $tablaLoc);

$action =  $_GET['action'] ?? 'home';
$controllerName = $_GET['controller'] ?? 'tablas';




if ($controllerName === 'user') {
$controller = new UserController($tablaUser,$tablaInsti);
}
else if ($controllerName === 'tablas') {
$controller = new TablesController($tablaBenef, $tablaPedi, $tablaUser, $tablaLoc);
}


$page = $controller->$action();





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
 ?>