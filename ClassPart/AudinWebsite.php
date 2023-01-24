<?php
namespace ClassPart;
class AudinWebsite 
implements \ClassGrl\Website
 {


public function getDefaultRoute(): string {
	return 'tablas/home';
	}


public function getController(string $controllerName): ?object {	
	$pdo = new \PDO('mysql:host=212.1.210.51;dbname=saltaped_audinut;
	charset=utf8', 'saltaped_audinut', 'audinut7625');
	

	$tablaBenef = new \ClassGrl\DataTables($pdo,'datos_benef', 'id_datos_benef');
	$tablaPedi =new \ClassGrl\DataTables($pdo,'datos_pedido', 'id_datos_pedido');
	$tablaUser = new \ClassGrl\DataTables($pdo, 'datos_usuarios','id_usuario' );
    $tablaLoc = new \ClassGrl\DataTables($pdo,'datos_localidad', 'gid');
    $tablaInsti = new \ClassGrl\DataTables($pdo,'datos_institucion', 'codi_esta');


    if ($controllerName === 'user') {
		$controller = new \ClassPart\Controllers\Usuarios($tablaUser,$tablaInsti);
		}
	else if ($controllerName === 'tablas') {
		$controller = new  \ClassPart\Controllers\Beneficiarios($tablaBenef, $tablaLoc);
		}
		else if ($controllerName === 'pedido') {
		$controller = new  \ClassPart\Controllers\Pedidos($tablaPedi,$tablaBenef,$tablaUser);
		}

 else {
            $controller = null;
        }
		
	return $controller;

  }
}
















