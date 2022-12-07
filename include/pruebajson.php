<?php
try {
include __DIR__ . '/../include/conect.php';
include __DIR__ . '/../classes/DataTables.php';

$tablaBenef = new DataTables($pdo, 'datos_benef', 'id_datos_benef');
if (isset($_POST['Nombres'])) {
				
					$Beneficiario['id_datos_benef'] = $_GET['id'];
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


$tablaBenef->save($Beneficiario);
	header('Location: inicio.php');
} else {
	if (isset($_GET['id'])) {
	$Beneficiario = $tablaBenef->findById($_GET['id']);
}
	$title = 'Edita beneficiario';
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