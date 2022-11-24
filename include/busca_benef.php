<?php
include __DIR__ . '/conect.php';
//include __DIR__ . '/funciones.php';
try {

$query = "
SELECT nombre_geo FROM datos_localidad
ORDER BY nombre_geo ASC
";

$result = $pdo->query($query);

$data = array();

foreach($result as $row)
{
    $data[] = array(
        'label'     =>  $row['nombre_geo'],
        'value'     =>  $row['nombre_geo']
    );
}




$title = 'Busca Beneficiario';


 

ob_start();
include __DIR__ . '/../templates/busca_benef.html.php';
$output = ob_get_clean() ;

}

    catch (PDOException $e) {
      $error = 'Error en la base:' . $e->getMessage() . ' en la linea ' .
      $e->getFile() . ':' . $e->getLine();
    }
  


 include  __DIR__ . '/../templates/layout.html.php';



