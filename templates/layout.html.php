<?php
if (isset($_SESSION['inicio']) && (time() - $_SESSION['inicio'] > 1800)) {
    
    session_unset();     
    session_destroy();   
    header('Location: /login/login');
}
$_SESSION['inicio'] = time(); // update last activity time stamp
?>

<!DOCTYPE html>
<html style=" height:100%;">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="/styles.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>


<script src="https://kit.fontawesome.com/f6cbba0704.js" crossorigin="anonymous"></script>
 <!-- -----------------jquery----------------- -->
 <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

<!-- --------------bootstrap--------------------- -->

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

<!-- -------------------datatables-------------------- -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.12.1/af-2.4.0/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/cr-1.5.6/date-1.1.2/fc-4.1.0/fh-3.2.3/kt-2.7.0/r-2.3.0/rg-1.2.0/rr-1.2.8/sc-2.0.6/sb-1.3.3/sp-2.0.1/sl-1.4.0/sr-1.1.1/datatables.min.css"/>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.12.1/af-2.4.0/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/cr-1.5.6/date-1.1.2/fc-4.1.0/fh-3.2.3/kt-2.7.0/r-2.3.0/rg-1.2.0/rr-1.2.8/sc-2.0.6/sb-1.3.3/sp-2.0.1/sl-1.4.0/sr-1.1.1/datatables.min.js"></script>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"> -->
 <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>

  

  <title><?=$title?></title>
  <script src="/autocom.js"></script>
 
</head>
  <body class="w3-light-grey" > 

 

<header class="p-2 mb-2 bg-primary ">
  <div class="container-fluid">
<h4 class="text-white">Area Fórmulas - Gestión solicitudes de nutroterápicos</h4>

<?php if (isset($_SESSION['username'])) 
{echo "Usuario: " . $_SESSION['nombre'] .' '.$_SESSION['apellido'].' - ' . 

$_SESSION['establecimiento_nombre'];}

 ?>
</h5>

<nav class="navbar navbar-expand-sm navbar-light py-0 small bg-light">
    <div class="container">
  <?php if ($loggedIn): ?>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a  class="navbar-brand mb-0 " href="/benef/home ">Inicio</a>
          </li>
          <li class="nav-item">
          <a class="navbar-brand mb-0 " href="/benef/edit">Beneficiarios</a>
          </li>

          <li class="nav-item dropdown">
            <a class="dropdown-toggle navbar-brand mb-0" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Pedidos
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="navbar-brand mb-0" href="/benef/listar">Por Beneficiario-Cargar</a></li>
              <li><a class="navbar-brand mb-0" href="/pedido/listartodos">Por Pedido Ver/Editar</a></li>
             </ul>
          </li>
         
   <?php if ( isset($_SESSION['tipo'])&& $_SESSION['tipo']<2 ) { ?>
            <li class="nav-item dropdown">
            <a class="dropdown-toggle navbar-brand mb-0" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Usuarios
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="navbar-brand mb-0" href="/user/user">Cargar Usuario</a></li>
              <li><a class="navbar-brand mb-0" href="/user/listar">Ver/Editar</a></li>
             </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="dropdown-toggle navbar-brand mb-0" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Vademecum
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="navbar-brand mb-0" href="/nutroter/produ">Cargar Productos</a></li>
              <li><a class="navbar-brand mb-0" href="/nutroter/listar">Ver/Editar</a></li>
             </ul>
          </li>
  <?php } elseif ( isset($_SESSION['tipo'])&& $_SESSION['tipo']>=2 ) { ?>
 
           <li><a class="navbar-brand mb-0" href="/nutroter/listar">Vademecum</a></li>
 
    <?php } ?>
          <li> 
          <a class="nav-item active" aria-current="page" href ="/login/logout">Salir</a>
          </li>
        </ul>
      </div>
    </div>
    <?php else: ?>
      <a class="nav-link active " aria-current="page" href="/login/login">Ingresar con contraseña (Usuarios registrados)</a>
    <?php endif; ?>
  </nav>




</header>
 <main class="w3-row-padding table-container">  
  <div class="w3-container" >
    
  <?=$output ?? ''?>

  </div>  
  </main>
<footer class="p-1 mb-1 bg-primary text-white ">
<div class="container-fluid">

<h6 align="center"> MSP - DNyAS - Programa: Auditoría Nutroterápicos.</h6>

</div>
</footer>

 

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
<script src="\datatable.js"> </script>
<script src="\scripts.js"> </script>

</body>
</html>