<!DOCTYPE html>
<html style=" height:100%;">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="/styles.css">
  
<!-- bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- datatables -->

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.13.1/af-2.5.1/b-2.3.3/b-html5-2.3.3/b-print-2.3.3/fh-3.3.1/r-2.4.0/rg-1.3.0/rr-1.3.1/sc-2.0.7/sb-1.4.0/sl-1.5.0/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.13.1/af-2.5.1/b-2.3.3/b-html5-2.3.3/b-print-2.3.3/fh-3.3.1/r-2.4.0/rg-1.3.0/rr-1.3.1/sc-2.0.7/sb-1.4.0/sl-1.5.0/datatables.min.js">
</script>





  <title><?=$title?></title>
  <script src="/autocomplete.js"></script>
  <script src="../js/autocompleta.js"></script>
</head>
  <body class="w3-light-grey" >
<header class="p-2 mb-2 bg-primary text-white">
  <div class="container-fluid">
<h4>Gestión solicitudes de nutroterápicos</h4>
<h4>Area Fórmulas</h4>

<nav class="navbar navbar-expand-sm navbar-light py-0 small bg-light">
  <div class="container-fluid"> 
  
     <a class="navbar-brand mb-0 " href="/tablas/home ">Home</a>
      <a class="navbar-brand mb-0 " href="/tablas/busca">Buscar</a>
      <a class="navbar-brand mb-0 " href="/tablas/edit">Cargar</a>
      <a class="navbar-brand mb-0 " href="/user/carga_user">Cargar Usuario</a>
     <a class="navbar-brand mb-0 " href="/tablas/listar">Listar</a>
     



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