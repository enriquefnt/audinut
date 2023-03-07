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

$instituciones = $this->instiTable->findAll();


	foreach($instituciones as $institucion)
	{
	    $data_insti[] = array(
	        'label'     =>  $institucion['establecimiento_nombre'],
	        'value'     =>  $institucion['codi_esta']
	    );
	}

	

	$Usuario=$_POST['Usuario'];
	$Usuario['nombre'] =ucwords(strtolower($Usuario['nombre']));
	$Usuario['apellido'] =ucwords(strtolower($Usuario['apellido']));
	$usuario['email'] = strtolower($Usuario['email']);
	$Usuario['password'] = password_hash($Usuario['password'], PASSWORD_DEFAULT);
	$Usuario['fechaCarga'] = new \DateTime();
	$title = 'Carga Usuarios';


	$errors = [];
	if ($_SESSION['tipo'] > 2) {
	$errors[] = 'Ud no está habilitado para crear usuarios';
	header('Location:  /benef/home');
	}


	if (empty($Usuario['nombre'])) {
	$errors[] = 'Debe indicar el nombre';
	}

	if (empty($Usuario['apellido'])) {
	$errors[] = 'Debe indicar el Apellido';
	}

	if (filter_var($Usuario['email']) == false) {
	
	$errors[] = 'El formato del correo no es válido';
	}

	if (count($this->userTable->find('email', $Usuario['email'])) > 0) {
	$errors[] = 'Un usuario con este e-mail ya está registrado';
	}

	if (count($this->userTable->find('user', $Usuario['user'])) > 0) {
	$errors[] = 'Un usuario con este nombre de usuario ya está registrado';
	} 

if  (empty($errors)) {

$this->userTable->save($Usuario);

header('Location: /user/success');
}

else {

 return ['template' => 'carga_user.html.php',
					     'title' => $title ,
					 'variables' => [
					 	'errors' => $errors,
			       'data_insti'  =>   $data_insti,
					 'datosUser' => $Usuario  ?? ' '
									 ]

					];
}

/*
public function addPedido($pedido) {
	$pedido['id_usuario']= $this -> id;

	return $this -> 
}

*/

}

public function success() {
return ['template' => 'registersuccess.html.php',
'title' => 'Registro OK'];
}

}


