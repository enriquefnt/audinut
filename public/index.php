
<?php 


try {
include __DIR__ . '/../include/conect.php';
	include __DIR__ . '/../classes/dataTables.php';
	include __DIR__ . '/../classes/controllers/TablesController.php';

	$tablaBenef = new DataTables($pdo,'datos_benef', 'id_datos_benef');
	$tablaPedi =new DataTables($pdo,'datos_pedido', 'id_datos_pedido');
	$tablaUser = new DataTables($pdo, 'datos_usuarios','id_usuario' );
    $tablaLoc = new DataTables($pdo,'datos_localidad', 'gid');

	$TablesController = new TablesController($tablaBenef, $tablaPedi, $tablaUser, $tablaLoc);


// (isset($_GET['action'])) {
	
	$action=$_GET['action'] ?? 'home';
		$page=$TablesController->$action();
/*
switch ($valoraction) {
	case 'busca':
		$page=$TablesController->busca();
		break;
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
*/


$action =  $_GET['action'] ?? 'home';




$page = $TablesController->$action();

$title=$page['title'];
// $output=$page['output'];

$totalBenef = $page['totalBenef'];
$benefs = $page['benefs'];



ob_start();
include __DIR__ . '/../templates/' . $page['template'];
$output = ob_get_clean();
} 



catch (PDOException $e) {
$title = 'Ocurrio un error';
$output = 'Database error: ' . $e->getMessage() . ' in '
. $e->getFile() . ':' . $e->getLine();
}
include  __DIR__ . '/../templates/layout.html.php';
 ?>