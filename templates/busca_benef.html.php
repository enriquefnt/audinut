 <div class="container">
     
	<form class="row g-3"  action="" autocomplete="off" method="post" >
		 <div class="col-sm-3">
		 	<!-- <label class="form-label-sm">Buscar Caso</label> -->
		  <input  type="text" name="Nombre" id="dName" placeholder="Buscar ...">
		</div>
		 <input type="hidden" name="id_datos_benef" id="dTel" value="xxxx">
		<div class="col-sm-1">
				<button class="btn btn-primary" type="submit" name="submit">Buscar</button>
		</div>
	</form> 
  </div>	

 


   <?php

if ((isset($_POST['Nombre'])) && ($_POST['id_datos_benef'])=='xxxx') { ?>  
<div class="container">

<a type="button" class="btn btn-primary" href="../include/carga_benef.php">No existe, cargar los datos</a>

</div>
 <?php } 

elseif (isset($_POST['id_datos_benef'])) { ?> 
 <div class="container">

<a type="button" class="btn btn-primary" href="../include/nuevoControl.php?id=<?=$_POST['id_datos_benef']; ?>">Tiene registrados los datos, cargar control</a>

</div>

 <?php } ?>