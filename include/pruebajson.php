<?php
include __DIR__ . '/conect.php';
include __DIR__ . '/funciones.php';


$lista =findAll($pdo,'datos_institucion','codi_esta');

foreach ($lista as $fila){
 
 $data[]= array(
        'label'=>$fila['establecimiento_nombre'],
        'value'=>$fila['codi_esta'] );
return $data;
}


if (1===1) {
	// code...
echo "______________";

}
?>