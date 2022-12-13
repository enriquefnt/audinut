<?php
include __DIR__ . '/conect.php';
include __DIR__ . '/../classes/dataTables.php';

session_start();

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
	
	print_r($_POST['Beneficiario']);

	$Beneficiario = $_POST['Beneficiario'];

	$Beneficiario['Nombres'] =ucwords(strtolower($Beneficiario['Nombres']));
	$Beneficiario['Apellidos'] =ucwords(strtolower($Beneficiario['Apellidos']));

	$Beneficiario['fechaCarga'] = new DateTime();
	$Beneficiario['id_usuario'] =$_SESSION['id_usuario'];
		

$tablaBenef->save($Beneficiario);

	 header('Location: inicio.php');

} else {
	if (isset($_GET['id'])) {
	$Beneficiario = $tablaBenef->findById($_GET['id']);
	//echo $Beneficiario['id_datos_benef'] ;
	//print_r($Beneficiario);
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