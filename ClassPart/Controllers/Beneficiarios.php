<?php
namespace ClassPart\Controllers;
use \ClassGrl\DataTables;
class Beneficiarios {
private $benefTable;
private $locTable;
private $authentication;


public function __construct(\ClassGrl\DataTables $benefTable,
							\ClassGrl\DataTables $locTable,
							\ClassGrl\Authentication $authentication) 
{

        $this->benefTable = $benefTable;
		$this->locTable = $locTable;
		$this->authentication = $authentication;
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

	

		  return ['template' => 'busca_benef.html.php',
					 'title' => $title ,
				 'variables' => [
				     'data'  =>   $data,
				    'result' => $result  ?? ' '
									 ]

					];
}



/// Metodo si es GET para beneficiario//////  

public function edit($id=null) {

		
$localidades = $this->locTable->findAll();


foreach($localidades as $localidad)
{
    $data[] = array(
        'label'     =>  $localidad['nombre_geo'],
        'value'     =>  $localidad['gid']
    );
}

		if (isset($_GET['id'])) {
				$datosCaso = $this->benefTable->findById($_GET['id']);
									}

			$title = 'Carga Beneficiario';

		

			  return ['template' => 'edita_benef.html.php',
					     'title' => $title ,
					 'variables' => [
			             'data'  =>   $data,
					 'datosCaso' => $datosCaso  ?? ' '
									 ]

					];
			
}

/// Metodo si es con post para beneficiario//////   

public function editSubmit() {
	
$localidades = $this->locTable->findAll();
foreach($localidades as $localidad)
{
    $data[] = array(
        'label'     =>  $localidad['nombre_geo'],
        'value'     =>  $localidad['gid']
    );
}



	$Beneficiario = $_POST['Beneficiario'];

	$Beneficiario['Nombres'] =ucwords(strtolower($Beneficiario['Nombres']));
	$Beneficiario['Apellidos'] =ucwords(strtolower($Beneficiario['Apellidos']));

	$Beneficiario['fechaCarga'] = new \DateTime();
	$Beneficiario['id_usuario'] = $user['id_usuario'] ?? '99';
		
	$errors = [];

//if (!isset($Beneficiario['id_usuario']) && (count($this->benefTable->find('DNI', $Beneficiario['DNI'])) > 0)) {

if (count($this->benefTable->find('DNI', $Beneficiario['DNI'])) > 0) {

$errors[] = 'Un beneficiario con este DNI ya está registrado';
}

if  (empty($errors)) {

$this->benefTable->save($Beneficiario);

header('Location: /user/success');

die() ;
 	}


else {

 return ['template' => 'edita_benef.html.php',
					     'title' => 'Revisar' ,
					 'variables' => [
					 	  'errors'=> $errors,
			             'data'  =>   $data,
					 'datosCaso' => $Beneficiario  ?? ' '
									 ]

					];
}


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


