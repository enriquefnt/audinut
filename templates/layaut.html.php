<!DOCTYPE html>
<html style=" height:100%;">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../estilos/styles.css">
<!-- w3css -->

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel = "stylesheet" href = "https://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" type="text/css" href="../estilos/estilo_layout.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>

 <script src="https://kit.fontawesome.com/07598e026b.js" crossorigin="anonymous">


 </script>

<script src="http://thecodeplayer.com/uploads/js/prefixfree.js" type="text/javascript"></script>

 <!-- jquery -->
 <script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>

<!-- bootstrap -->

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"/>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>





<!-- datatables -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.12.1/af-2.4.0/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/cr-1.5.6/date-1.1.2/fc-4.1.0/fh-3.2.3/kt-2.7.0/r-2.3.0/rg-1.2.0/rr-1.2.8/sc-2.0.6/sb-1.3.3/sp-2.0.1/sl-1.4.0/sr-1.1.1/datatables.min.css"/>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.12.1/af-2.4.0/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/cr-1.5.6/date-1.1.2/fc-4.1.0/fh-3.2.3/kt-2.7.0/r-2.3.0/rg-1.2.0/rr-1.2.8/sc-2.0.6/sb-1.3.3/sp-2.0.1/sl-1.4.0/sr-1.1.1/datatables.min.js"></script>

<!-- datatables-datetime -->


 <link rel="shortcut icon" type="image/x-icon" href="../public/favicon.ico">
	<title><?=$title?></title>
	
</head>


<body class="w3-light-grey">
<header class="w3-row-padding header w3-blue-grey">
<h3>Registro de Actividades de Promoción</h3>
<h4>Area Nutrición</h4>
<p>
	<?php if ($_SESSION['tipo'] == 0){ 
	echo  'Usuario:' ;
	} else { echo '
	Administrador:' ;} ?>
	<b><?php 
	if(isset($_SESSION['nombre'])) {
		echo $_SESSION['nombre'];
	}
	?></b>
	
	<b><?php 
	if(isset($_SESSION['nombre']) && $_SESSION['tipo'] == 0) {
		echo "&nbsp&nbsp	&nbsp	Area Operativa: ";
		echo $_SESSION['AreaOperativa'];
	}
	?></b>

</p>



<div>
<div class="w3-bar w3-border w3-light-grey">


  		<a href="../include/inicio.php" class="w3-bar-item w3-button">Instructivo</a>
		<a href="../include/carga.php"class="w3-bar-item w3-button">Carga Actividades</a>

<?php 
	if(isset($_SESSION['nombre']) && ($_SESSION['tipo']==1)) { ;?>
	<a href="../include/registro_usuarios.php"class="w3-bar-item w3-button ">Registar Usuario</a></li>
	<a href="../include/tabla_aop.php"class="w3-bar-item w3-button ">Ver por AOP</a></li>
	<?php } ?>
	
	<a href="../include/listado.php"class="w3-bar-item w3-button">Listado</a>
	<a href="../include/logout.php"class="w3-bar-item w3-button ">Salir</a></li>
	
</div>
</div>
</header >




<main class="w3-row-padding table-container">	
	<div class="w3-container" >
		<span onclick="this.parentElement.style.display='none'" class="w3-button w3-display-topright">&times;</span>	
			<?=$output?>
	</div>









</main>

<div class="w3-row-padding footer"  id="footer">
	
	<div class="w3-container w3-blue-grey  w3-center">


<h5 > DNyAS - Programa: Promoción</h5>
</div>
</div>
</body>
<script src="../include/datatable.js"> </script>
</html>