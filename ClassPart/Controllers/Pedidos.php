<?php
namespace ClassPart\Controllers;
use \ClassGrl\DataTables;
class Pedidos {
private $pediTable;
private $userTable;
private $benefTable;


public function __construct(\ClassGrl\DataTables $pediTable,
							\ClassGrl\DataTables $benefTable,
							\ClassGrl\DataTables $userTable,
							\ClassGrl\Authentication $authentication) {

        $this->pediTable = $pediTable;
        $this->benefTable = $benefTable;
		$this->userTable = $userTable;
		$this->authentication = $authentication;		
    }






public function pedido($id=null){

	$usuarios = $this->userTable->findAll();

/*
	foreach($usuarios as $usuario)
	{
	    $data_usuario[] = array(
	       'label'     =>   $usuario['nombre'] . ' ' .$usuario['apellido'] ,
           'value'     =>  $usuario['id_usuario']
	    );
	}
	*/

if (isset($_GET['id'])) {
				$datosBenef = $this->benefTable->findById($_GET['id']);
									}

			$title = 'Carga Pedido';

		

			  return ['template' => 'carga_pedi.html.php',
					     'title' => $title ,
					 'variables' => [
			     'data_usuario'  =>   $data_usuario ?? ' ',
				    'datosBenef' => $datosBenef  ?? ' '
									 ]

					];
			
}



public function pedidoSubmit() {

		$usuario = $this->authentication->getUser();

		$pedido=$_POST['Pedido'];
		$pedido['usuari_id']= $usuario['id_usuario'] ?? '00';
		$pedido['fecha_ped']= new \DateTime();

	$this->pediTable->save($pedido);

	
	header('Location: /user/success');
}


public function success() {
return ['template' => 'registersuccess.html.php',
'title' => 'Registro OK'];
}

}