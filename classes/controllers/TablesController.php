
<?php

class TablesController {
private $benefTable;
private $pediTable;
private $userTable;

public function __construct($benefTable,
 $pediTable, $userTable) {
$this->benefTable = $benefTable;
$this->pediTable = $pediTable;
$this->userTable = $userTable;
}




public function edit() {

$result = $tablaLoc->findAll();


foreach($result as $row)
{
    $data[] = array(
        'label'     =>  $row['nombre_geo'],
        'value'     =>  $row['gid']
    );
}


if (isset($_POST['Beneficiario'])) {
	
	print_r($_POST['Beneficiario']);

	$Beneficiario = $_POST['Beneficiario'];

	$Beneficiario['Nombres'] =ucwords(strtolower($Beneficiario['Nombres']));
	$Beneficiario['Apellidos'] =ucwords(strtolower($Beneficiario['Apellidos']));

	$Beneficiario['fechaCarga'] = new DateTime();
	$Beneficiario['id_usuario'] =$_SESSION['id_usuario'];
		

$this->benefTable->save($record);
header('Location: inicio.php');
}
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



public function home() {
		$title = 'Auditoria Fórmulas';
ob_start();
include __DIR__ . '/../../templates/home.html.php';
$output = ob_get_clean();

		return ['output' => $output, 'title' => $title];
	}
}