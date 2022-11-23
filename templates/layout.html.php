<!DOCTYPE html>
<html style=" height:100%;">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<title><?=$title?></title>
	<script src="../js/autocomplete.js"></script>

 

</head>


<body class="w3-light-grey">
<header class="p-3 mb-2 bg-primary text-white">
	<div class="container-fluid">
<h4>Gestión solicitudes de nutroterápicos</h4>
<h4>Area Fórmulas</h4>
</div>
<nav class="navbar navbar-expand-sm navbar-light py-0 small bg-light">
	<div class="container-fluid">
		
	<a class="navbar-brand mb-0 " href="../include/busca_benef.php">Carga datos</a>


	<a class="navbar-brand mb-0 " href="../include/carga_user.php">Registro de usuarios</a></li>
	
	<a class="navbar-brand mb-0 " href="../include/tabla_aop.php">Listados</a></li>

	
	<a  class="navbar-brand mb-0 " href="../include/listado.php"class="w3-bar-item w3-button">Salir</a>
	

</div>
</nav>

</header >

<main class="w3-row-padding table-container">	
	<div class="w3-container" >
	<?=$output?> 
	</div>

</main>
<footer class="p-3 mb-2 bg-primary text-white ">
<div class="container-fluid">

<h5 align="center"> DNyAS - Programa: Auditoría Nutroterápicos.</h5>

</div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<script>
    // (C) ATTACH AUTOCOMPLETE TO INPUT FIELDS
    window.addEventListener("DOMContentLoaded", function(){
          
      ac.attach({
        target: "dName",
        data: "search.php",
        
        // OPTIONAL
        delay : 300,
        min : 3
      });
    });
    </script>

    <script src="../js/autocompleta.js"></script>
</body>
</html>