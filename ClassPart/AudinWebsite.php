<?php
namespace ClassPart;
class AudinWebsite implements \ClassGrl\Website  {
 
 	private \ClassGrl\DataTables $tablaBenef;
 	private \ClassGrl\DataTables $tablaPedi;
 	private \ClassGrl\DataTables $tablaUser;
 	private \ClassGrl\DataTables $tablaLoc;
 	private \ClassGrl\DataTables $tablaInsti;
 	private \ClassGrl\Authentication $Authentication;

public function __construct() {
	$pdo = new \PDO('mysql:host=212.1.210.51;dbname=saltaped_audinut; charset=utf8', 'saltaped_audinut', 'audinut7625');
	$this->tablaBenef = new \ClassGrl\DataTables($pdo,'datos_benef', 'id_datos_benef');
	$this->tablaPedi =new \ClassGrl\DataTables($pdo,'datos_pedido', 'id_datos_pedido');
	$this->tablaUser = new \ClassGrl\DataTables($pdo, 'datos_usuarios','id_usuario' );
    $this->tablaLoc = new \ClassGrl\DataTables($pdo,'datos_localidad', 'gid');
    $this->tablaInsti = new \ClassGrl\DataTables($pdo,'datos_institucion', 'codi_esta');
    $this->authentication = new \ClassGrl\Authentication($this->tablaUser,'user', 'password'); 
}


	public function getLayoutVariables(): array {
	return [
	'loggedIn' => $this->authentication->isLoggedIn()
	];
}



public function getDefaultRoute(): string {
	return 'benef/home';
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
		$controller = new \ClassPart\Controllers\Usuarios($this->tablaUser,$this->tablaInsti);
		}
	else if ($controllerName === 'benef') {
		$controller = new  \ClassPart\Controllers\Beneficiarios($this->tablaBenef, $this->tablaLoc);
		}
		else if ($controllerName === 'pedido') {
		$controller = new  \ClassPart\Controllers\Pedidos($this->tablaPedi,$this->tablaBenef,
			$this->tablaUser);
		}
	else if ($controllerName == 'login') {
		$controller = new \ClassPart\Controllers\Login($this->authentication);
		}	
 else {
            $controller = null;
        }
		
	return $controller;

  }



public function checkLogin(string $uri): ?string {
        $restrictedPages = ['benef/edit', 'user/user', 'benef/listar'];

        if (in_array($uri, $restrictedPages) && !$this->authentication->isLoggedIn()) {
            header('location: /login/login');
            exit();
        }

        return $uri;
    }

}

















