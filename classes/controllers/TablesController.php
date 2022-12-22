<?php

class TablesController {
private $benefTable;
private $pediTable;
private $userTable;
private $locTable;


public function  __construct(DataTables $benefTable,DataTables $pediTable,
DataTables $userTable, DataTables $locTable) {



$this->benefTable = $benefTable;
$this->pediTable = $pediTable;
$this->userTable = $userTable;
$this->locTable = $locTable;
}



public function busca() {

$result = $this->benefTable->findAll();


foreach($result as $beneficiario)
{
    $data[] = array(
        'label'     =>   $beneficiario['Nombres'] . ' ' .$beneficiario['Apellidos']   ,
        'value'     =>  $beneficiario['id_datos_benef']
    );
}

$title = 'Busca Beneficiario';

			ob_start();
			include __DIR__ . '/../../templates/busca_benefx.html.php';
			$output = ob_get_clean() ;

return ['output' => $output, 'title' => $title];
}

   

public function edit() {

$localidades = $this->locTable->findAll();


foreach($localidades as $localidad)
{
    $data[] = array(
        'label'     =>  $localidad['nombre_geo'],
        'value'     =>  $localidad['gid']
    );
}


if (isset($_POST['Beneficiario'])) {
	
	$Beneficiario = $_POST['Beneficiario'];

	$Beneficiario['Nombres'] =ucwords(strtolower($Beneficiario['Nombres']));
	$Beneficiario['Apellidos'] =ucwords(strtolower($Beneficiario['Apellidos']));

	$Beneficiario['fechaCarga'] = new DateTime();
	$Beneficiario['id_usuario'] =$_SESSION['id_usuario'];
		

$this->benefTable->save($Beneficiario);
header('Location: index.php');
}
else {

			if (isset($_GET['id'])) {
				$datosCaso = $this->benefTable->findById($_GET['id']);
				 print_r($datosCaso);
				// var_dump($data);
			}

			$title = 'Carga Beneficiario';

		}	

			return ['template' => 'edita_benef.html.php',
					 'title' => $title ,
					 'variables' => [
				// 'localidades' => $localidades,
					      'data'  =>   $data,
					 'datosCaso' => $datosCaso  ?? ' '
									 ]

					];
			
}


public function listar(){

	
		$result = $this->benefTable->findAll();

		$benefs = [];
		foreach ($result as $benef) {
			

			$benefs[] = [
				'id_datos_benef' => $benef['id_datos_benef'],
				'Nombres' => $benef['Nombres'],
				'Apellidos' => $benef['Apellidos']
			];

		}


		$title = 'Listado';

		$totalBenef = $this->benefTable->total();

		

		return ['template' => 'listado.html.php',
				'title' => $title,
				'variables' => ['totalBenef' => $totalBenef,
				'benefs' => $benefs ]
			];
	}





public function home() {
		$title = 'Auditoria Fórmulas';

return ['template' => 'home.html.php', 'title' =>$title,'variables' => [] ];
		
	}


}


