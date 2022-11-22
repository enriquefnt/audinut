<?php
include __DIR__ . '/conect.php';
include __DIR__ . '/funciones.php';
try {


$query = "
SELECT * FROM datos_institucion
ORDER BY codi_esta ASC
";

$result = $pdo->query($query);

$data_esta = array();

foreach($result as $row)
{
    $data_esta[] = array(
        'label'     =>  $row['establecimiento_nombre'],
        'value'     =>  $row['codi_esta']
    );
}

	
$title = 'Carga Usuario';

if (isset($_POST['apellido'])) {

$record = [ 			'nombre' =>ucwords(strtolower($_POST['nombre'])),
						'apellido' =>ucwords(strtolower($_POST['apellido'])),
						'profesion' => $_POST['profesion'],
						'tipo' => $_POST['tipo'],
						//'cod_ser' => $_POST['cod_ser'],
	 					'celular' => $_POST['celular'],
						'email' => $_POST['email'],
						'usuario' => $_POST['usuario'],
						'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)];
			

echo "$record[1]";

insert($pdo, 'datos_usuarios', $record);
//header('Location: carga_usuario.php');
					
								}


//elseif (isset($_POST['id_usuarios'])) {

//		 
//		 		$datosCaso = findById($pdo, 'datos_benef', 'id_usuario', $_POST['id_datos_benef']);
//			}








$title = 'Carga Datos';


 

ob_start();
include __DIR__ . '/../templates/carga_usuario.html.php';
$output = ob_get_clean() ;
	
}


catch (PDOException $e) {
      $error = 'Error en la base:' . $e->getMessage() . ' en la linea ' .
      $e->getFile() . ':' . $e->getLine();
    }

include  __DIR__ . '/../templates/layout.html.php';


?>

	