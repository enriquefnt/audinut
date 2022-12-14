
<?php
try {
	include __DIR__ . '/../include/conect.php';
	include __DIR__ . '/../classes/dataTables.php';
	include __DIR__ . '/../classes/controllers/TablesController.php';

	$tablaBenef = new DataTables($pdo,'datos_benef', 'id_datos_benef');
	$tablaPedi =new DataTables($pdo,'datos_benef', 'id_datos_benef');
	$tablaUser = new DataTables($pdo, 'datos_usuarios','id_usuario' );
  $tablaLoc = new DataTables($pdo,'datos_localidad', 'gid');

	$TablesController = new TablesController($tablaBenef, $tablaBenef, $tablaUser, $tablaLoc);


	if (isset($_GET['edit'])) {
		$page = $TablesController->edit();
	}

	else if (isset($_GET['list'])) {
		 $page = $TablesController->listar();
	} 

	else {
		$page = $TablesController->home();
	}

	$title = $page['title'];
	$output = $page['output'];

}
catch (PDOException $e) {
	$title = 'Ocurrio un error';

	$output = 'Error en la base: ' . $e->getMessage() . ' en ' .
	$e->getFile() . ':' . $e->getLine();
}

include  __DIR__ . '/../templates/layout.html.php';