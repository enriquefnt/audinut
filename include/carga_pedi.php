<?php
include __DIR__ . '/conect.php';
include __DIR__ . '/funciones.php';




try {

$query = "
SELECT id_usuario,nombre, concat(nombre,' ',apellido) as profesional FROM datos_usuarios
ORDER BY nombre  ASC
";

$result = $pdo->query($query);

$data = array();

foreach($result as $row)
{
    $data[] = array(
        'label'     =>  $row['profesional'],
        'value'     =>  $row['id_usuario']
    );
}

$title = 'Carga pedido';

if (isset($_POST['id_datos_benef'])) {

$record = [ 				
						'id_datos_benef' =>$_POST['id_datos_benef'],
						'diag_med' =>$_POST['diag_med'],
						'diag_nutri' => $_POST['diag_nutri'],
						'peso' => $_POST['peso'],
	 					'talla' => $_POST['talla'],
						'variacion' => $_POST['variacion'],
						'requ_calorias' => $_POST['requ_calorias'],
						'porc_aporte' => $_POST['porc_aporte'],
						'nutro_ter' => $_POST['nutro_ter'],
	 					'via' => $_POST['via'],
						'suger_tm' => $_POST['suger_tm'],
						'presenta' =>($_POST['presenta']),
						'gramos_dia' => $_POST['gramos_dia'],
						'env_pormes' => $_POST['env_pormes'],
	 					'prof_solicita' => $_POST['prof_solicita'],
	 					'usuari_id' => $_POST['id_usuario'],
						'fecha_ped' => $_POST['fecha_ped']
							 	
					];
			

insert($pdo, 'datos_pedido', $record);
header('Location: busca_benef.php');
					
								}


elseif (isset($_GET['id'])) {
		 
		 $beneficiario = findById($pdo, 'datos_benef', 'id_datos_benef', $_GET['id']);
		
			}






$title = 'Carga Pedido';
$cargadate=date('Y-m-d');


 

ob_start();
include __DIR__ . '/../templates/carga_pedi.html.php';
$output = ob_get_clean() ;
	
}


catch (PDOException $e) {
      $error = 'Error en la base:' . $e->getMessage() . ' en la linea ' .
      $e->getFile() . ':' . $e->getLine();
    }

include  __DIR__ . '/../templates/layout.html.php';


?>

	