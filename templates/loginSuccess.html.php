<div class="container">
<h4>¡Ingreso exitoso!</h4>
</div>

<h4>¡Ingreso exitoso!</h4>


<div class="container">
	<h5>

<div class="container">
	<h5>

<?php
 date_default_timezone_set('America/Argentina/Salta');
$hora = date('H');

if($hora >= 5 && $hora < 13) {
    $mensaje = 'Buenos  días';
} else if($hora >= 13 && $hora < 20) {
    $mensaje = 'Buenas tardes';
} else {
    $mensaje = 'Buenas noches';
}

echo $mensaje . ' '. $_SESSION['nombre'] .' '.$_SESSION['apellido'].' de ' . 

$_SESSION['establecimiento_nombre'];
?>
</h5></div>