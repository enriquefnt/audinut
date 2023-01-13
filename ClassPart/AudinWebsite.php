<?php
namespace ClassPart;
class AudinWebsite {

public function getDefaultRoute() {
	return 'tablas/home';
	}

public function getController(string $controllerName) {
	
	$pdo = new \PDO('mysql:host=212.1.210.51;dbname=saltaped_audinut;
	charset=utf8', 'saltaped_audinut', 'audinut7625');
	//include __DIR__ . '/../include/conect.php';
	//include __DIR__ . '/../classes/dataTables.php';s
	//include __DIR__ . '/../classes/controllers/TablesController.php';
	//include __DIR__ . '/../classes/controllers/UserController.php';

	$tablaBenef = new \ClassGrl\DataTables($pdo,'datos_benef', 'id_datos_benef');
	$tablaPedi =new \ClassGrl\DataTables($pdo,'datos_pedido', 'id_datos_pedido');
	$tablaUser = new \ClassGrl\DataTables($pdo, 'datos_usuarios','id_usuario' );
    $tablaLoc = new \ClassGrl\DataTables($pdo,'datos_localidad', 'gid');
    $tablaInsti = new \ClassGrl\DataTables($pdo,'datos_institucion', 'codi_esta');

/*
    $tablaBenef = new ClassGrl\DataTables($pdo,'datos_benef', 'id_datos_benef');
	$tablaPedi =new DataTables($pdo,'datos_pedido', 'id_datos_pedido');
	$tablaUser = new DataTables($pdo, 'datos_usuarios','id_usuario' );
    $tablaLoc = new DataTables($pdo,'datos_localidad', 'gid');
    $tablaInsti = new DataTables($pdo,'datos_institucion', 'codi_esta');
*/
    if ($controllerName === 'user') {
		$controller = new \ClassPart\Controllers\UserController($tablaUser,$tablaInsti);
		}
	else if ($controllerName === 'tablas') {
		$controller = new  \ClassPart\Controllers\TablesController($tablaBenef, $tablaPedi, $tablaUser,  $tablaLoc);
		}
	return $controller;

}


}
















