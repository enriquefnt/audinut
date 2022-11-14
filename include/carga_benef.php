<?php
include __DIR__ . '/conect.php';
include __DIR__ . '/funciones.php';
try {
$title = 'Carga Beneficiario';

if (isset($_POST['Apellidos'])) {

$record = [ 				'Nombres' =>ucwords(strtolower($_POST['Nombres'])),
						'Apellidos' =>ucwords(strtolower($_POST['Apellidos'])),
						'DNI' => $_POST['DNI'],
						'FechaNac' => $_POST['FechaNac'],
						'Celular' => $_POST['Celular'],
	 					'Domicilio' => $_POST['Domicilio'],
						'Localidad' => $_POST['Localidad'],
						'NombresResp' => ucwords(strtolower($_POST['NombresResp'])),
						'ApellidosResp' => ucwords(strtolower($_POST['ApellidosResp'])),
						'CelularResp' => $_POST['CelularResp'],
						'DNIResp' => $_POST['DNIResp'],
			
							 	
					];
			

insert($pdo, 'datos_benef', $record);
header('Location: carga_benef.php');
					
								}


elseif (isset($_POST['id_datos_benef'])) {

		 
		 		$datosCaso = findById($pdo, 'datos_benef', 'id_datos_benef', $_POST['id_datos_benef']);
			}









$title = 'Carga Datos';


 

ob_start();
include __DIR__ . '/../templates/carga_benefBS5.html.php';
$output = ob_get_clean() ;
	
}


catch (PDOException $e) {
      $error = 'Error en la base:' . $e->getMessage() . ' en la linea ' .
      $e->getFile() . ':' . $e->getLine();
    }

include  __DIR__ . '/../templates/layaut.html.php';


?>

	