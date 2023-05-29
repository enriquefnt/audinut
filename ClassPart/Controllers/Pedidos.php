<?php
namespace ClassPart\Controllers;
use \ClassGrl\DataTables;
use \ClassGrl\Fpdf;
use \AllowDynamicProperties;
use \font;
#[AllowDynamicProperties]
class Pedidos {
private $pediTable;
private $userTable;
private $benefTable;
private $authentication;
private $cambiaCodigo;

public function __construct(\ClassGrl\DataTables $pediTable,
							\ClassGrl\DataTables $benefTable,
							\ClassGrl\DataTables $userTable,
							\ClassGrl\Authentication $authentication,
							\ClassGrl\Fpdf $Fpdf)
							 {

        $this->pediTable = $pediTable;
        $this->benefTable = $benefTable;
		$this->userTable = $userTable;
		$this->authentication = $authentication;
		$this->Fpdf = $Fpdf;	
	//	$this->cambiaCodigo =$cambiaCodigo;
		

    }




	/// Metodo si es GET //////  
public function pedido($id=null){


if (isset($_GET['id'])) {
				$datosBenef = $this->benefTable->findById($_GET['id']);
				// $datosPedido = $this->pediTable->findById($_GET['id']);		
			}
elseif (isset($_GET['idx'])){
	   $datosPedido = $this->pediTable->findById($_GET['idx']);
	 	   $datosBenef = $this->benefTable->findById($datosPedido['id_datos_benef']);
		}
else {
	$pedido=null;
	}

			$title = 'Pedido';

			return ['template' => 'carga_pedi.html.php',
					     'title' => $title ,
					 'variables' => [
				    'datosBenef' => $datosBenef  ?? ' ',
					'datosPedido' => $datosPedido  ?? ' '
									 ]

					];
			
}


/// Metodo si es con post //////   


public function pedidoSubmit() {

	$usuario = $this->authentication->getUser();

	$pedido=$_POST['Pedido'];
	$pedido['usuari_id']= $usuario['id_usuario'] ?? '00';
	$pedido['fecha_ped']= new \DateTime();

$errors = [];
if ($_SESSION['tipo'] > 4) {
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
		
		$title = 'Carga Pedidos';

		$totalPedi = $this->pediTable->total();


		return ['template' => 'listaped.html.php',
				'title' => $title,
				'variables' => ['totalPedi' => $totalPedi,
				'pedidos' => $pedidos,
				'datosBenef' => $datosBenef  ?? ' ']
			];
	}

public function print() {

	
	$datosPedido = $this->pediTable->findById($_GET['id']);
	$datosBenef = $this->benefTable->findById($datosPedido['id_datos_benef']);


	$beneficiariox =  array_map($this->cambiaCodigo ,$datosBenef );
	
	$usuario = $this->authentication->getUser();
	
	$beneficiario = $beneficiariox[1] .''.$beneficiariox[2] ;;
	$quienImprime = $beneficiariox[1] .''.$beneficiariox[2] ;

	$pdf = new Fpdf('P','mm','A4');

	
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFont('Times','I',8);
	$pdf->Cell(0,7,'Copia realizada por: ' . $quienImprime) ;
	$pdf->Ln();
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(0,7,('Beneficiario: '.$beneficiario ),0,0);
	$pdf->Ln();
	$pdf->Ln();
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(0,7,('Producto: '.$datosPedido['nutro_ter'].'  Fecha: '. $datosPedido['fecha_ped'] ),0,0);
	$pdf->Ln();
	$pdf->Output();

}


private function cambiaCodigo($value) {
	return iconv('UTF-8', 'Windows-1252', $value);
}



public function success() {
return ['template' => 'registersuccess.html.php',
'title' => 'Registro OK'];
		}

	}




/*

<?php/*
namespace ClassPart\Controllers;
use \ClassGrl\DataTables;
use \AllowDynamicProperties;
#[AllowDynamicProperties]
class Pedidos {
private $pediTable;
private $userTable;
private $benefTable;
private $authentication;

public function __construct(\ClassGrl\DataTables $pediTable,
							\ClassGrl\DataTables $benefTable,
							\ClassGrl\DataTables $userTable,
							\ClassGrl\Authentication $authentication) {

        $this->pediTable = $pediTable;
        $this->benefTable = $benefTable;
		$this->userTable = $userTable;
		$this->authentication = $authentication;		
    }

/// Metodo si es GET //////  



public function pedido($id=null){





if (isset($_GET['id'])) {
				$datosBenef = $this->benefTable->findById($_GET['id']);
				// $datosPedido = $this->pediTable->findById($_GET['id']);		
			}
elseif (isset($_GET['idx'])){
	   $datosPedido = $this->pediTable->findById($_GET['idx']);
	 	   $datosBenef = $this->benefTable->findById($datosPedido['id_datos_benef']);
}


			$title = 'Pedido';

			return ['template' => 'carga_pedi.html.php',
					     'title' => $title ,
					 'variables' => [
				    'datosBenef' => $datosBenef  ?? ' ',
					'datosPedido' => $datosPedido  ?? ' '
									 ]

					];
			
}


/// Metodo si es con post //////   


public function pedidoSubmit() {

	$usuario = $this->authentication->getUser();

	$pedido=$_POST['Pedido'];
	$pedido['usuari_id']= $usuario['id_usuario'] ?? '00';
	$pedido['fecha_ped']= new \DateTime();

$errors = [];
if ($_SESSION['tipo'] > 4) {
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
		
		$title = 'Carga Pedidos';

		$totalPedi = $this->pediTable->total();


		return ['template' => 'listaped.html.php',
				'title' => $title,
				'variables' => ['totalPedi' => $totalPedi,
				'pedidos' => $pedidos,
				'datosBenef' => $datosBenef  ?? ' ']
			];
	}


public function print() {
	$result = $this->pediTable->find('id_datos_benef',$_GET['id']);
	$datosBenef = $this->benefTable->findById($_GET['id']);

	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial', 'B', 16);

	// Crea las columnas en el PDF
	$pdf->Cell(40, 10, 'ID', 1);
	$pdf->Cell(60, 10, 'Nombre', 1);
	$pdf->Cell(40, 10, 'Edad', 1);
	$pdf->Ln();

	// Agrega los datos al PDF
$pedidos = [];
		foreach ($result as $pedido) {
			
			$pedidos[] = [
				'id_datos_pedido' => $pedido['id_datos_pedido'],
			//	'fecha_ped' =>  date('d/m/Y',strtotime($pedido['fecha_ped'])),
			//	'nutro_ter' => $pedido['nutro_ter'],
				'env_pormes' => $pedido['env_pormes'],
			//	'estado' => $pedido['estado'],
			//	'id_datos_benef'=> $pedido['id_datos_benef']
			];

		}


	// Genera el archivo PDF
	$pdf->Output('exportacion.pdf', 'D');


}


public function success() {
return ['template' => 'registersuccess.html.php',
'title' => 'Registro OK'];
		}

	}