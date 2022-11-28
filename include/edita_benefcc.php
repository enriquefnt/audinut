<?php
include __DIR__ . '/../include/conect.php';
include __DIR__ . '/../include/funciones.php';
include __DIR__ . '/../classes/dataTables.php';
try {


$query = "
SELECT nombre_geo FROM datos_localidad
ORDER BY nombre_geo ASC
";

$result = $pdo->query($query);

$data = array();

foreach($result as $row)
{
    $data[] = array(
        'label'     =>  $row['nombre_geo'],
        'value'     =>  $row['nombre_geo']
    );
}

$title = 'Editar';
 if (isset($_POST['id_datos_benef'])) {

$benef_editar = [ 'id_datos_benef'=> $_POST['id_datos_benef'],
									'Nombres' =>ucwords(strtolower($_POST['Nombres'])),
									'Apellidos' =>ucwords(strtolower($_POST['Apellidos'])),
									'DNI' => $_POST['DNI'],
									'FechaNac' => $_POST['FechaNac'],
									'Celular' => $_POST['Celular'],
				 					'Domicilio' => $_POST['Domicilio'],
									'Localidad' =>$_POST['nombre_geo'],
									'NombresResp' => ucwords(strtolower($_POST['NombresResp'])),
									'ApellidosResp' => ucwords(strtolower($_POST['ApellidosResp'])),
									'CelularResp' => $_POST['CelularResp'],
									'DNIResp' => $_POST['DNIResp']
			
							 	
					]; 
				save($pdo, 'datos_benef', 'id_datos_benef', $benef_editar);
/*

									$id_datos_benef= $_POST['id_datos_benef'];
									$Nombres =ucwords(strtolower($_POST['Nombres']));
									$Apellidos =ucwords(strtolower($_POST['Apellidos']));
									$DNI = $_POST['DNI'];
									$FechaNac = $_POST['FechaNac'];
									$Celular = $_POST['Celular'];
				 					$Domicilio = $_POST['Domicilio'];
									$Localidad = $_POST['nombre_geo'];
									$NombresResp = ucwords(strtolower($_POST['NombresResp']));
									$ApellidosResp = ucwords(strtolower($_POST['ApellidosResp']));
									$CelularResp = $_POST['CelularResp'];
									$DNIResp = $_POST['DNIResp'];
		
  		$sql = "UPDATE `datos_benef` SET 
				  `Nombres`= '$Nombres',
					`Apellidos`= '$Apellidos',
					`DNI`= '$DNI',
					`FechaNac`= '$FechaNac',
					`Celular`= '$Celular',
					`Domicilio`= '$Domicilio',
					`Localidad`= '$Localidad',
					`NombresResp`= '$NombresResp',
					`ApellidosResp`= '$ApellidosResp',
					`CelularResp`= '$CelularResp',
					`DNIResp`= '$DNIResp'
				where `id_datos_benef`=$id_datos_benef";
  		$pdo->exec($sql); 	
  */
				header('Location: /../audinut/include/busca_benef.php');	
}
				
else {

		if (isset($_GET['id'])) {
		$datosCaso = findById($pdo, 'datos_benef', 'id_datos_benef', $_GET['id']);
			}



 

ob_start();

		include  __DIR__ . '/../templates/edita_benef.html.php';
$output = ob_get_clean();
}
   
}
    catch (PDOException $e) {
      $error = 'Error en la base:' . $e->getMessage() . ' en la linea ' .
      $e->getFile() . ':' . $e->getLine();
    }

include  __DIR__ . '/../templates/layout.html.php';