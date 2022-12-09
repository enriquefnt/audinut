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

$title = 'Carga';

$tablaBenef = new DataTables($pdo, 'datos_benef', 'id_datos_benef');
if (isset($_POST['Beneficiario'])) {

$Beneficiario = $_POST['Beneficiario'];
$Beneficiario['fechaCarga'] = new DateTime();
$Beneficiario['Nombres'] =ucwords(strtolower($Beneficiario['Nombres']));
$Beneficiario['Apellidos'] =ucwords(strtolower($Beneficiario['Apellidos']));
$Beneficiario['id_usuario'] =$_SESSION['id_usuario'];
				
				/*	$Beneficiario['id_datos_benef'] =$_POST['id_datos_benef'];
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
					$Beneficiario['DNIResp'] = $_POST['DNIResp']; */
					
$tablaBenef->save($Beneficiario);
	header('Location: inicio.php');
} else {
	if (isset($_GET['id'])) {
	$Beneficiario = $tablaBenef->findById($_GET['id']);
}
	
		ob_start();
		include __DIR__ . '/../templates/edita_benef.html.php';
		$output = ob_get_clean();
}
} catch (PDOException $e) {
		$title = 'An error has occurred';
		$output = 'Database error: ' . $e->getMessage() . ' in '
		. $e->getFile() . ':' . $e->getLine();
}
		include __DIR__ . '/../templates/layout.html.php';