<?php
namespace ClassPart\Controllers;
use \ClassGrl\DataTables;
use \AllowDynamicProperties;
#[AllowDynamicProperties]
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

	$errors = [];
	if ($_SESSION['tipo'] > 3) {
	$errors[] = 'Ud no está habilitado para cargar pedidos';
	}
if  (empty($errors)) {


	$this->pediTable->save($pedido);
}
	
	header('Location: /user/success');
}

public function listar(){

	$result = $this->pediTable->find('id_datos_benef',$_GET['id']);
	$datosBenef = $this->benefTable->findById($_GET['id']);

		$pedidos = [];
		foreach ($result as $pedido) {
			
			$pedidos[] = [
				'id_datos_pedido' => $pedido['id_datos_pedido'],
				'fecha_ped' =>  date('d/m/Y',strtotime($pedido['fecha_ped'])),
				'nutro_ter' => $pedido['nutro_ter'],
				'env_pormes' => $pedido['env_pormes'],
				'estado' => $pedido['estado'],
				'id_datos_benef'=> $pedido['id_datos_benef']
			];

		}
		$result = $this->pediTable->findAll();
		
		$title = 'Pedidos';

		$totalPedi = $this->pediTable->total();


		return ['template' => 'listaped.html.php',
				'title' => $title,
				'variables' => ['totalPedi' => $totalPedi,
				'pedidos' => $pedidos,
				'datosBenef' => $datosBenef  ?? ' ']
			];
	}





public function success() {
return ['template' => 'registersuccess.html.php',
'title' => 'Registro OK'];
}

}