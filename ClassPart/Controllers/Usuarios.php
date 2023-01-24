<?php
namespace ClassPart\Controllers;
use \ClassGrl\DataTables;
class Usuarios {
private $userTable;
private $instiTable;


public function __construct(\ClassGrl\DataTables $userTable,
							\ClassGrl\DataTables $instiTable) {

        $this->userTable = $userTable;
		$this->instiTable = $instiTable;
    }






public function user($id=null){

	$instituciones = $this->instiTable->findAll();


	foreach($instituciones as $institucion)
	{
	    $data_insti[] = array(
	        'label'     =>  $institucion['establecimiento_nombre'],
	        'value'     =>  $institucion['codi_esta']
	    );
	}

if (isset($_GET['id'])) {
				$datosUser = $this->userTable->findById($_GET['id']);
									}
			
$title = 'Carga Usuarios';

		

			  return ['template' => 'carga_user.html.php',
					     'title' => $title ,
					 'variables' => [
			       'data_insti'  =>   $data_insti,
					 'datosUser' => $datosUser  ?? ' '
									 ]

					];

}



public function userSubmit() {

	$Usuario=$_POST['Usuario'];
	$Usuario['nombre'] =ucwords(strtolower($Usuario['nombre']));
	$Usuario['apellido'] =ucwords(strtolower($Usuario['apellido']));
	$Usuario['password'] = password_hash($Usuario['password'], PASSWORD_DEFAULT);
	$Usuario['fechaCarga'] = new \DateTime();

$this->userTable->save($Usuario);

header('Location: /tablas/home');

}

public function success() {
return ['template' => 'registersuccess.html.php',
'title' => 'Registro OK'];
}

}