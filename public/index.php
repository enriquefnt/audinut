
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

$action =  $_GET['action'] ?? 'home';

$page = $TablesController->$action();


$variables = $page['variables'];

$title=$page['title'];


if (isset($page['variables'])) {
extract($page['variables']);
}


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