<?php
include __DIR__ . '/../include/conect.php';
include __DIR__ . '/../include/funciones.php';

try {



 $title = 'Editar';

if (isset($_POST['Apellidos'])) {

$benef_editar = [ 		'id_datos_benef'=> $_POST['id_datos_benef'],
						'Nombres' =>ucwords(strtolower($_POST['Nombres'])),
						'Apellidos' =>ucwords(strtolower($_POST['Apellidos'])),
						'DNI' => $_POST['DNI'],
						'FechaNac' => $_POST['FechaNac'],
						'Celular' => $_POST['Celular'],
	 					'Domicilio' => $_POST['Domicilio'],
						'Localidad' => $_POST['Localidad'],
						'NombresResp' => ucwords(strtolower($_POST['NombresResp'])),
						'ApellidosResp' => ucwords(strtolower($_POST['ApellidosResp'])),
						'CelularResp' => $_POST['CelularResp'],
						'DNIResp' => $_POST['DNIResp']
			
							 	
					]; }
				

update($pdo, 'datos_benef', 'id_datos_benef', $benef_editar);



session_unset();
header('Location: /../audinut/include/carga_benef.php')	;	 


}



    catch (PDOException $e) {
      $error = 'Error en la base:' . $e->getMessage() . ' en la linea ' .
      $e->getFile() . ':' . $e->getLine();
    }

