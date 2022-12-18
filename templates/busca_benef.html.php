

 <div class="container">
     
	<form class="row g-6"  action="" autocomplete="off" method="post" >
		 <div class="col-sm-3">
		 	
		  <input  type="text" class="form-control form-control-sm" name="Nombre" id="dName" placeholder="Buscar ...">
		</div>
		 <input type="hidden" name="id_datos_benef" id="dTel" value="<?=$row['codi_esta'] ?? 'xxxx'?>">
		<div class="col-sm-2">
				<button class="btn btn-primary" type="submit" name="submit">Buscar</button>
		</div>
	</form> 
  </div>	

 


   <?php





if ((isset($_POST['Nombre'])) && ($_POST['id_datos_benef'])=='xxxx') { ?>  


<div class="container">
<h4>No está registrado </h4>
</div>


<div class="container">

<a type="button" class="btn btn-primary" href="index.php?action=edit">Cargar los datos</a>

</div>
 <?php } 

elseif (isset($_POST['id_datos_benef'])) { ?> 
 
<div class="container">
<h4>Está registrado </h4>
</div>


 <div class="container">

<a type="button" class="btn btn-primary" href="../include/carga_pedi.php?id=<?=$_POST['id_datos_benef']; ?>">Cargar pedido</a>

<a type="button" class="btn btn-primary" href="index.php?action=edit&id=<?=$_POST['id_datos_benef']; ?>">Editar datos</a>

</div>

 <?php } ?>

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