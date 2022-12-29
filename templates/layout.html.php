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
  <script src="../js/autocompleta.js"></script>
</head>
  <body class="w3-light-grey">
<header class="p-2 mb-2 bg-primary text-white">
  <div class="container-fluid">
<h4>Gestión solicitudes de nutroterápicos</h4>
<h4>Area Fórmulas</h4>
  <p><?=$controllerName .'---' . $action ?></p>


<nav class="navbar navbar-expand-sm navbar-light py-0 small bg-light">
  <div class="container-fluid"> 
  
     <a class="navbar-brand mb-0 " href="/tablas/home">Home</a>
      <a class="navbar-brand mb-0 " href="index.php?controller=tablas&amp;action=busca">Buscar</a>
      <a class="navbar-brand mb-0 " href="index.php?controller=tablas&amp;action=edit">Cargar</a>
      <a class="navbar-brand mb-0 " href="index.php?controller=user&amp;action=carga_user">Cargar Usuario</a>
     <a class="navbar-brand mb-0 " href="index.php?controller=tablas&amp;action=listar">Listar</a>




  </nav>
</div>

</header>
 <main class="w3-row-padding table-container">  
  <div class="w3-container" >

  <?=$output ?? ''?>

  </div>  
  </main>
<footer class="p-1 mb-1 bg-primary text-white ">
<div class="container-fluid">

<h5 align="center"> DNyAS - Programa: Auditoría Nutroterápicos.</h5>

</div>
</footer>

 <script src="../js/autocompleta.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</body>
</html>