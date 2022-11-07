<?php
include __DIR__ . '/conect.php';
include __DIR__ . '/funciones.php';
try {
$title = 'Carga Beneficiario';

if (isset($_POST['Apellidos'])) {

$record = [ 							
							 	'Nombres' => $_POST['Nombres'],
							 	'Apellidos' =>$_POST['Apellidos'],
							 	'DNI' => $_POST['DNI'],
	 							
					];
			//		print_r($record);
					

insert($pdo, 'datos_benef', $record);
					
								}
	}

catch (PDOException $e) {
      $error = 'Error en la base:' . $e->getMessage() . ' en la linea ' .
      $e->getFile() . ':' . $e->getLine();
    }
	
	include  __DIR__ . '/../templates/carga_benef.html.php';