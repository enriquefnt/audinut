<?php 

include __DIR__ . '/../include/conect.php';
	include __DIR__ . '/../classes/dataTables.php';
	include __DIR__ . '/../classes/controllers/TablesController.php';

	$tablaBenef = new DataTables($pdo,'datos_benef', 'id_datos_benef');
	$tablaPedi =new DataTables($pdo,'datos_benef', 'id_datos_benef');
	$tablaUser = new DataTables($pdo, 'datos_usuarios','id_usuario' );
  $tablaLoc = new DataTables($pdo,'datos_localidad', 'gid');

	$TablesController = new TablesController($tablaBenef, $tablaBenef, $tablaUser, $tablaLoc);


$page=$TablesController->listar();

//print_r($page)
include  __DIR__ . '/../templates/layout.html.php';
 ?>