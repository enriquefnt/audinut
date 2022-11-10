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
							 	'FechaNac' => $_POST['FechaNac'],
							 	'Celular' => $_POST['Celular'],
	 							'Domicilio' => $_POST['Domicilio'],
							 	'Localidad' => $_POST['Localidad'],
							 	'NombresResp' => $_POST['NombresResp'],
							 	'ApellidosResp' => $_POST['ApellidosResp'],
							 	'CelularResp' => $_POST['CelularResp'],
							 	'DNIResp' => $_POST['DNIResp'],

					];
			//		print_r($record);
					

insert($pdo, 'datos_benef', $record);
header('Location: carga_benef.php');
					
								}


	}

catch (PDOException $e) {
      $error = 'Error en la base:' . $e->getMessage() . ' en la linea ' .
      $e->getFile() . ':' . $e->getLine();
    }
	
	include  __DIR__ . '/../templates/carga_benefBS5.html.php';