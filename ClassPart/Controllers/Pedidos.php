<?php
namespace ClassPart\Controllers;
use \ClassGrl\DataTables;
use \ClasPart\Controllers\Imprime;
use \AllowDynamicProperties;
use \font;
#[AllowDynamicProperties]
class Pedidos {
private $pediTable;
private $userTable;
private $benefTable;
private $tablaProdu;
private $authentication;
private $cambiaCodigo;
private $calcularEdad;
public function __construct(\ClassGrl\DataTables $pediTable,
							\ClassGrl\DataTables $benefTable,
							\ClassGrl\DataTables $userTable,
							\ClassGrl\DataTables $tablaProdu,
							\ClassGrl\Authentication $authentication,
							\ClassPart\Controllers\Imprime $Imprime
							)
							 {
        $this->pediTable = $pediTable;
        $this->benefTable = $benefTable;
		$this->userTable = $userTable;
		$this->tablaProdu = $tablaProdu;
		$this->authentication = $authentication;
		$this->Imprime = $Imprime;	
		    }


	private function cambiaCodigo($value) {
		return iconv('UTF-8', 'Windows-1252', $value);
	}
	

	private function calcularEdad($fechaNacimiento, $fechaActual) {
		$nacimiento = new \DateTime($fechaNacimiento);
		$actual = new \DateTime($fechaActual);
		$edad = $nacimiento->diff($actual);
			$anios = $edad->y;
			$meses = $edad->m;
			$dias = $edad->d;
	 if($anios>0){
		return " $anios a $meses m    ";
	}
	else {
		return "  $meses m $dias d   ";
	}
	}
	

	/// Metodo si es GET //////  
public function pedido($id=null) {

	$productos = $this->tablaProdu->findAll();
	
	$data = array();
    $data1 = array();

	foreach($productos as $nutroter){
	
	if($nutroter['activo'] == 1)
	{ 
		 $data[] = array(
		 	    'label'  =>   $nutroter['producto'],
		 	  //  'value'  =>   $nutroter['id_producto']
		 );
		$data1[] = array(
			'label'  =>   $nutroter['tipo'] ?? '',
			//'value'  =>   $nutroter['id_producto']
	);
	} 


}
	
    $data = array_unique($data,SORT_REGULAR);
	$data1 = array_unique($data1,SORT_REGULAR);
  

if (isset($_GET['id'])) {
				$datosBenef = $this->benefTable->findById($_GET['id']);
					
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
					'data'  =>   $data,
					'data1'  =>   $data1,
					'datosPedido' => $datosPedido  ?? ' '
									 ]

					];
			
}


/// Metodo si es con post //////   


public function pedidoSubmit() {

	$usuario = $this->authentication->getUser();

	$pedido=$_POST['Pedido'];
	$pedido['usuari_id']= $usuario['id_usuario'] ?? '00';
	// $pedido['fecha_ped']= new \DateTime();

$errors = [];
if ($_SESSION['tipo'] > 4) {
$errors[] = 'Ud no está habilitado para cargar pedidos';
}
if  (empty($errors)) {


$this->pediTable->save($pedido);
}

header('Location: /benef/listar');
}


public function listar(){

	$result = $this->pediTable->find('id_datos_benef',$_GET['id']);
	$datosBenef = $this->benefTable->findById($_GET['id']);
	$edad=$this->calcularEdad($datosBenef['FechaNac'], $result['fecha_ped'][0] ?? ' ');
		$pedidos = [];
		$countPedidos = count($result);
		foreach ($result as $pedido) {
			
			$pedidos[] = [
				'id_datos_pedido' => $pedido['id_datos_pedido'],
				'fecha_ped' =>  date('d/m/Y',strtotime($pedido['fecha_ped'])),
				'nutro_ter' => $pedido['nutro_ter'],
				'suger_tm' => $pedido['suger_tm'],
				'env_pormes' => $pedido['env_pormes'],
				'estado' => $pedido['estado'],
				'id_datos_benef'=> $pedido['id_datos_benef']
			];

		}
			
		$title = 'Carga Pedidos';

		$totalPedi = $countPedidos;


		return ['template' => 'listaped.html.php',
				'title' => $title,
				'variables' => [
				'totalPedi' => $totalPedi,
				'pedidos' => $pedidos,
				'datosBenef' => $datosBenef  ?? ' ',
				'edad'=> $edad]
			];
	}


	public function listartodos(){

		$result = $this->pediTable->findAll();
		$title = "Lista de pedidos";


		foreach ($result as $pedido) {
			
			$datosBenef = $this->benefTable->findById($pedido['id_datos_benef']);;
			$datosUser = $this->userTable->findById($pedido['usuari_id']);
				
				$pedidos[] = [
				'id_datos_pedido' => $pedido['id_datos_pedido'],
				'fecha_ped' =>  date('d/m/Y',strtotime($pedido['fecha_ped'])),
				'nutro_ter' => $pedido['nutro_ter'],
				'suger_tm' => $pedido['suger_tm'],
				'env_pormes' => $pedido['env_pormes'],
				'estado' => $pedido['estado']?? 'Pendiente',
				'Nombres' => $datosBenef['Nombres'] ?? '',
				'Apellidos' => $datosBenef['Apellidos'] ?? '',
    			'apellido' => $datosUser['apellido'] ?? ''
			];
		}
	
		return [
			'template' => 'listapedtotal.html.php',
			'title' => $title,
			'variables' => [
				'pedidos' => $pedidos
			]
		];
	}

public function print() {

	
	$datosPedido = $this->pediTable->findById($_GET['id']);
	$fecha= date('d/m/Y',strtotime($datosPedido['fecha_ped']));
	


	$datosBenef = $this->benefTable->findById($datosPedido['id_datos_benef']);
	$beneficiariox =  array_map($this->cambiaCodigo ,$datosBenef );

	

	$solicita = $this->userTable->findById($datosPedido['usuari_id']);
	
	$usuario = $this->authentication->getUser();
	
	
	$beneficiario = $beneficiariox[1] .' '.$beneficiariox[2] ;
	$responsable =$beneficiariox['NombresResp'] .' '.$beneficiariox['ApellidosResp'] ;
	$edades = $this->calcularEdad($datosBenef['FechaNac'], $datosPedido['fecha_ped']);
	$quienImprime = $usuario[1] .' '.$usuario[2] ;

	$pdf = new \ClassPart\Controllers\Imprime('P','mm','A4');
	// $pdf->AddFont('Medico','','medico.php');
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->Ln(6);
	$pdf->SetFont('Arial','',12);
	if (isset($solicita['establecimiento_nombre'])) {
	$pdf->Cell(0,7,iconv('UTF-8', 'Windows-1252','Institución: ').  iconv('UTF-8', 'Windows-1252', $solicita['establecimiento_nombre'])  ,0,0); }
	else{
		$pdf->Cell(0,7,iconv('UTF-8', 'Windows-1252','Institución: N/A')  ,0,0); 
	}
	$pdf->Ln();
	$pdf->Cell(0,7, 'Fecha: ' . $fecha  ,0,0); 
	$pdf->Ln();
	$pdf->Cell(0,7,'Beneficiario: '.iconv('UTF-8', 'Windows-1252',$beneficiario ) .'	-	DNI: ' .$beneficiariox['DNI']. '	-	Edad:' . $edades ,0,0);
	$pdf->Ln();
	$pdf->Cell(0,7,'Domicilio: '.iconv('UTF-8', 'Windows-1252',$beneficiariox['Domicilio'] ) .' - ' . iconv('UTF-8', 'Windows-1252',$beneficiariox['Localidad']). ' - '. 'Tel/Cel: '. $beneficiariox['Celular'] ,0,0);
	$pdf->Ln();
	if (isset($beneficiariox['NombresResp']) && $beneficiariox['DNIResp'] > 1000 ){
	$pdf->Cell(0,7,'Responsable: '.iconv('UTF-8', 'Windows-1252',$responsable ) .'	-	DNI: ' .$beneficiariox['DNIResp'] .  ' - '. 'Tel/Cel: '. $beneficiariox['CelularResp'] ,0,0);
	$pdf->Ln();
	}
	$pdf->Cell(0,7,(iconv('UTF-8', 'Windows-1252','Diagnósticos: ').(iconv('UTF-8', 'Windows-1252',$datosPedido['diag_med'])). ' -  '. (iconv('UTF-8', 'Windows-1252',$datosPedido['diag_nutri']))) ,0,0);
	$pdf->Ln();
	$pdf->Cell(0,7,('Producto: '.iconv('UTF-8', 'Windows-1252',$datosPedido['nutro_ter'])),0,0);
	 $pdf->Ln();
	$pdf->Cell(0,7,('Calorias requeridas: '.$datosPedido['requ_calorias'].' -  % a cubrir: ' .$datosPedido['porc_aporte'].' -  Gr/'. iconv('UTF-8', 'Windows-1252','día: ') 
	 .$datosPedido['gramos_dia'] ),0,0);
	$pdf->Ln();
	$pdf->Cell(0,7,'Envases por mes: '. $datosPedido['env_pormes'],0,0);
	$pdf->Ln();
	if (isset($datosPedido['Observacion']) ){
		$pdf->Cell(0,7,'Observaciones: '.iconv('UTF-8', 'Windows-1252',$datosPedido['Observacion']) ,0,0);
		$pdf->Ln();
		}
		$pdf->Ln(20);
		if (isset($solicita['establecimiento_nombre'])) {
	$pdf->Cell(0,7,'Profesional solicitante: '. $solicita['nombre'] .' '.  $solicita['apellido'] ,0,0); }
	else{
		$pdf->Cell(0,7, 'Profesional solicitante:  N/A'  ,0,0); 
		}	
	$pdf->Ln();
	//$pdf->SetFont('Medico','',14);
	$pdf->SetFont('Arial','I',8);
	$pdf->SetY(-28);
	$pdf->Cell(0,7,'Copia realizada por: ' . iconv('UTF-8', 'Windows-1252',$quienImprime),0,0,'C') ;
	
	$pdf->Output($beneficiariox[2],'I');
	
}




public function success() {
return ['template' => 'pedidosucess.html.php',
'title' => 'Registro OK'];
		}

	}