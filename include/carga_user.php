<?php
include __DIR__ . '/conect.php';
include __DIR__ . '/funciones.php';
include __DIR__ . '/../classes/dataTables.php';
$tablaUser = new dataTables($pdo,'datos_usuarios','id_usuario');


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

if (isset($_POST['establecimiento_nombre'])) {



}


if (isset($_POST['nombre'])) {

$registro = [
      	 			'nombre' => ucwords(strtolower($_POST['nombre'])),
      				'apellido' => ucwords(strtolower($_POST['apellido'])),
                    'profesion' => $_POST['profesion'],
      				'tipo' => $_POST['tipo'],
      				'establecimiento_nombre' => $_POST['establecimiento_nombre'],
                    'id_establecimiento' => $_POST['id_establecimiento'],
      				'email' => strtolower($_POST['email']),
					'celular' => $_POST['celular'],
      				'usuario' => $_POST['usuario'],
                    'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)];


$tablaUser->update($registro);

//insert ($pdo, 'datos_usuarios', $registro);
//session_unset();
//	 
//echo $row['codi_esta'] . "__" ;


header('Location: /../audinut/include/carga_user.php') ;



}



   

// $result = findAll($pdo, 'act_aop' ,'areaoperativa');
 $title = 'Carga Usuarios';
 

ob_start();
include __DIR__ . '/../templates/carga_user.html.php';
$output = ob_get_clean() ;
	
}


catch (PDOException $e) {
      $error = 'Error en la base:' . $e->getMessage() . ' en la linea ' .
      $e->getFile() . ':' . $e->getLine();
    }

include  __DIR__ . '/../templates/layout.html.php';


?>

