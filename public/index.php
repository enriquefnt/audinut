
<?php 
/*
try {
include __DIR__ . '/../include/conect.php';
	include __DIR__ . '/../classes/dataTables.php';
	include __DIR__ . '/../classes/controllers/TablesController.php';

	$tablaBenef = new DataTables($pdo,'datos_benef', 'id_datos_benef');
	$tablaPedi =new DataTables($pdo,'datos_benef', 'id_datos_benef');
	$tablaUser = new DataTables($pdo, 'datos_usuarios','id_usuario' );
    $tablaLoc = new DataTables($pdo,'datos_localidad', 'gid');

	$TablesController = new TablesController($tablaBenef, $tablaBenef, $tablaUser, $tablaLoc);


if (isset($_GET['action'])) {
$valoraction=$_GET['action'];





switch ($valoraction) {
	case 'edit':
		$page=$TablesController->edit();
		break;
	case 'listar':
		$page=$TablesController->listar();
		break;	
	
	default:
		$page = $TablesController->home();
		break;
}


$title=$page['title'];
$output=$page['output'];
}

}
catch (PDOException $e) {
$title = 'Ocurrio un erro';
$output = 'Database error: ' . $e->getMessage() . ' in '
. $e->getFile() . ':' . $e->getLine();
}
include  __DIR__ . '/../templates/layout.html.php';

*/

try {
include __DIR__ . '/../include/conect.php';
	include __DIR__ . '/../classes/dataTables.php';
	include __DIR__ . '/../classes/controllers/TablesController.php';

	$tablaBenef = new DataTables($pdo,'datos_benef', 'id_datos_benef');
	$tablaPedi =new DataTables($pdo,'datos_pedido', 'id_datos_pedido');
	$tablaUser = new DataTables($pdo, 'datos_usuarios','id_usuario' );
    $tablaLoc = new DataTables($pdo,'datos_localidad', 'gid');

	$TablesController = new TablesController($tablaBenef, $tablaPedi, $tablaUser, $tablaLoc);

if (isset($_GET['action'])) {
	// code...





	$valoraction=$_GET['action'];

switch ($valoraction) {
	case 'edit':
		$page=$TablesController->edit();
		break;
	case 'listar':
		$page=$TablesController->listar();
		break;	
	
	default:
		$page = $TablesController->home();
		break;
}


$title=$page['title'];
$output=$page['output'];

}
}
catch (PDOException $e) {
$title = 'Ocurrio un erro';
$output = 'Database error: ' . $e->getMessage() . ' in '
. $e->getFile() . ':' . $e->getLine();
}
include  __DIR__ . '/../templates/layout.html.php';
 ?>