<?php 


class UserController {

private $userTable;
private $instiTable;
	
	public function  __construct(DataTables $userTable,DataTables $instiTable) 
	{
		$this->userTable = $userTable;
		$this->instiTable = $instiTable;
	}

public function carga_user () {
	
	$instituciones = $this->instiTable->findAll();


	foreach($instituciones as $institucion)
	{
	    $data_esta[] = array(
	        'label'     =>  $institucion['establecimiento_nombre'],
	        'value'     =>  $institucion['codi_esta']
	    );
	}


	if (isset($_POST['Usuario'])) {
		
		$Usuario = $_POST['Usuario'];

		$Usuario['nombre'] =ucwords(strtolower($Usuario['nombre']));
		$Usuario['apellido'] =ucwords(strtolower($Usuario['apellido']));
		$Usuario['password'] = password_hash($Usuario['password'], PASSWORD_DEFAULT);
		$Usuario['fechaCarga'] = new DateTime();
		
			

	$this->userTable->save($Usuario);
	header('Location: /tablas/home');
	}
	else {

				if (isset($_GET['id'])) {
					$datosCaso = $this->userTable->findById($_GET['id']);
										}

				$title = 'Carga Beneficiario';

		}	

				  return ['template' => 'carga_user.html.php',
						     'title' => $title ,
						 'variables' => [
				        'data_esta'  =>  $data_esta,
						 'datosCaso' => $datosCaso  ?? ' '
										 ]

						];
				
	}


}


















 ?>
