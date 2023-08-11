<?php
namespace ClassPart\Controllers;
use \ClassGrl\DataTables;
use \AllowDynamicProperties;
#[AllowDynamicProperties]
class Beneficiarios {
private $benefTable;
private $locTable;
private $userTable;
private $authentication;


public function __construct(\ClassGrl\DataTables $benefTable,
							\ClassGrl\DataTables $locTable,
							\ClassGrl\DataTables $userTable,
							\ClassGrl\Authentication $authentication) 
{

        $this->benefTable = $benefTable;
		$this->locTable = $locTable;
		$this->userTable = $userTable;
		$this->authentication = $authentication;
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

			$title = ' Beneficiario';

		

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

	$usuario = $this->authentication->getUser();

	$Beneficiario = $_POST['Beneficiario'];

	$Beneficiario['Nombres'] =ltrim(ucwords(strtolower($Beneficiario['Nombres'])));
	$Beneficiario['Apellidos'] =ltrim(ucwords(strtolower($Beneficiario['Apellidos'])));
	$Beneficiario['NombresResp'] =ltrim(ucwords(strtolower($Beneficiario['NombresResp'])));
	$Beneficiario['ApellidosResp'] =ltrim(ucwords(strtolower($Beneficiario['ApellidosResp'])));

	$Beneficiario['fechaCarga'] = new \DateTime();
	$Beneficiario['id_usuario'] = $usuario['id_usuario'] ?? '00';

		
	$errors = [];


if ( empty($_GET['id']) && count($this->benefTable->find('DNI', $Beneficiario['DNI'])) > 0) {

$errors[] = 'Un beneficiario con este DNI ya está registrado';
}

if  (empty($errors)) {

$this->benefTable->save($Beneficiario);
if (empty($_GET['id'])){
$datosBenef = $this->benefTable->ultimoReg();
}
else{
	$datosBenef = $this->benefTable->findById($_GET['id']);
}

return ['template' => 'registersuccess.html.php',
					     'title' => 'Carga' ,
					 'variables' => [
					    'datosCaso' => $datosBenef  ?? ' '
									 ]
					];

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


public function home() {
		$title = 'Instructivo';

return ['template' => 'home.html.php', 'title' =>$title,'variables' => [] ];
		
	}


}

