<?php
namespace ClassPart;
class Audinwebsite {

public function getDefaultRoute() {
	return 'tablas/home';
	}

public function getController(string $controllerName) {
	include __DIR__ . '/../include/conect.php';
	//include __DIR__ . '/../classes/dataTables.php';
	include __DIR__ . '/../classes/controllers/TablesController.php';
	include __DIR__ . '/../classes/controllers/UserController.php';

	$tablaBenef = new DataTables($pdo,'datos_benef', 'id_datos_benef');
	$tablaPedi =new DataTables($pdo,'datos_pedido', 'id_datos_pedido');
	$tablaUser = new DataTables($pdo, 'datos_usuarios','id_usuario' );
    $tablaLoc = new DataTables($pdo,'datos_localidad', 'gid');
    $tablaInsti = new DataTables($pdo,'datos_institucion', 'codi_esta');


    $tablaBenef = new ClassGrl\DataTables($pdo,'datos_benef', 'id_datos_benef');
	$tablaPedi =new DataTables($pdo,'datos_pedido', 'id_datos_pedido');
	$tablaUser = new DataTables($pdo, 'datos_usuarios','id_usuario' );
    $tablaLoc = new DataTables($pdo,'datos_localidad', 'gid');
    $tablaInsti = new DataTables($pdo,'datos_institucion', 'codi_esta');

    if ($controllerName === 'user') {
		$controller = new UserController($tablaUser,$tablaInsti);
		}
	else if ($controllerName === 'tablas') {
		$controller = new TablesController($tablaBenef, $tablaPedi, $tablaUser, $tablaLoc);
		}
	return $controller;

}


}
















