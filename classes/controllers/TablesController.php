
<?php

class TablesController {
private $benefTable;
private $pediTable;
private $userTable

public function __construct(DataTables $benefTable,
DatabaseTable $pediTable,DataTables $userTable,) {
$this->benefTable = $benefTable;
$this->pediTable = $pediTable;
$this->userTable = $userTable;
}

public function home() {
$title = 'Auditoria de fórmulas';
ob_start();
include __DIR__ . '/../templates/home.html.php';
$output = ob_get_clean();
return ['output' => $output, 'title' => $title];
}



public function edit() {

if (isset($_POST['nombres'])) {
$record = [ 							
						//'id_datos_benef'=> $_POST['id_datos_benef'],
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

$this->benefTable->save($record);
header('Location: inicio.php');

else {

			if (isset($_GET['id'])) {
				$datosCaso = $this->benefTable->findById($_GET['id']);
			
			}

			$title = 'Carga Beneficiario';

			ob_start();

			include  __DIR__ . '/../../templates/edita_benef.html.php';

			$output = ob_get_clean();

			return ['output' => $output, 'title' => $title];






}





}










}