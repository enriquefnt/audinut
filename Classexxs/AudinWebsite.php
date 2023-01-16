<?php
namespace Classes ;
class AudinWebsite {

public function getDefaultRoute() {
	return 'tablas/home';
	}

public function getController(string $controllerName) {
	$pdo = new \PDO('mysql:host=212.1.210.51;dbname=saltaped_audinut;
	//charset=utf8', 'saltaped_audinut', 'audinut7625');
//	include __DIR__ . '/../include/conect.php';
//	include __DIR__ . '/../classes/dataTables.php';
//	include __DIR__ . '/../classes/controllers/TablesController.php';
//	include __DIR__ . '/../classes/controllers/UserController.php';

	$tablaBenef = new \Classes\DataTables($pdo,'datos_benef', 'id_datos_benef');
	$tablaPedi =new \Classes\DataTables($pdo,'datos_pedido', 'id_datos_pedido');
	$tablaUser = new \Classes\DataTables($pdo, 'datos_usuarios','id_usuario' );
    $tablaLoc = new \Classes\DataTables($pdo,'datos_localidad', 'gid');
    $tablaInsti = new \Classes\DataTables($pdo,'datos_institucion', 'codi_esta');

    if ($controllerName === 'user') {
		$controller = new \Classes\Controllers\UserController($tablaUser,$tablaInsti);
		}
	else if ($controllerName === 'tablas') {
		$controller = new \Classes\Controllers\TablesController($tablaBenef, $tablaPedi, $tablaUser, 
	 $tablaLoc);
		}
	return $controller;

}


}
















