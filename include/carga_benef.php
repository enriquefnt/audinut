<?php
include __DIR__ . '/conect.php';
//include __DIR__ . '/funciones.php';
include __DIR__ . '/../classes/dataTables.php';

$tablaBenef = new DataTables($pdo,'datos_benef', 'id_datos_benef');
$tablaLoc = new DataTables($pdo,'datos_localidad', 'gid');
try {

$result = $tablaLoc->findAll();


foreach($result as $row)
{
    $data[] = array(
        'label'     =>  $row['nombre_geo'],
        'value'     =>  $row['gid']
    );
}

$title = 'Carga Beneficiario';

if (isset($_POST['id_datos_benef'])) {
/*
$record = [], 			
						
				/*		//'id_datos_benef'=> $_POST['id_datos_benef'],
						'Nombres' =>ucwords(strtolower($_POST['Nombres'])),
						'Apellidos' =>ucwords(strtolower($_POST['Apellidos'])),
						'DNI' => $_POST['DNI'],
						'FechaNac' => $_POST['FechaNac'],
						'Celular' => $_POST['Celular'],
	 					'Domicilio' => $_POST['Domicilio'],
						'Localidad' => $_POST['nombre_geo'],
						'NombresResp' => ucwords(strtolower($_POST['NombresResp'])),
						'ApellidosResp' => ucwords(strtolower($_POST['ApellidosResp'])),
						'CelularResp' => $_POST['CelularResp'],
						'DNIResp' => $_POST['DNIResp'],
			
							 	
					];
			*/
$Beneficiario=[];
						$Beneficiario['Nombres'] =ucwords(strtolower($_POST['Nombres']));
						$Beneficiario['Apellidos'] =ucwords(strtolower($_POST['Apellidos']));
						$Beneficiario['DNI'] = $_POST['DNI'];
						$Beneficiario['FechaNac'] = $_POST['FechaNac'];
						$Beneficiario['Celular'] = $_POST['Celular'];
	 					$Beneficiario['Domicilio'] = $_POST['Domicilio'];
						$Beneficiario['Localidad'] = $_POST['nombre_geo'];
						$Beneficiario['NombresResp'] = ucwords(strtolower($_POST['NombresResp']));
						$Beneficiario['ApellidosResp'] = ucwords(strtolower($_POST['ApellidosResp']));
						$Beneficiario['CelularResp'] = $_POST['CelularResp'];
						$Beneficiario['DNIResp'] = $_POST['DNIResp'];







// insert($pdo, 'datos_benef', $record);
	$tablaBenef->save($Beneficiario)		;		
header('Location: inicio.php');
					
								}


else { if (isset($_GET['id'])) {

		 
		 		$datosCaso = $tablaBenef->findById($_GET['id']);
			
//echo $datosCaso['id_datos_benef'];

			}
			}










$title = 'Carga Datos';


 

ob_start();
include __DIR__ . '/../templates/edita_benef.html.php';
$output = ob_get_clean() ;
	
}


catch (PDOException $e) {
      $error = 'Error en la base:' . $e->getMessage() . ' en la linea ' .
      $e->getFile() . ':' . $e->getLine();
    }

include  __DIR__ . '/../templates/layout.html.php';


?>

	