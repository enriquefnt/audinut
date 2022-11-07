 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	 <script src="../js/autocompleta.js"></script>
 	<title>busca</title>
 </head>
 <body>
 <div>
    <fieldset >
      <legend>Buscar Caso</legend>
<form   action="" autocomplete="off" method="post" >
 
  <input  type="text" name="Nombre" id="dName"><br><br>
 <input type="hidden"name="idPersona" id="dTel" value="xxxx"><br><br>

  <input type="submit" value="Buscar">
</form> 

</fieldset>
</div>
<div>

<?php

if ((isset($_POST['Nombre'])) && ($_POST['idPersona'])=='xxxx') { ?>  

<button class="w3-btn w3-yellow"> 
<a href="../includes/cargaDatos.php">No existe, cargar los datos</a>
</button>

 <?php } 

elseif (isset($_POST['idPersona'])) { ?> 
 
 <button class="w3-btn w3-green"> 
<a href="../includes/nuevoControl.php?id=<?=$_POST['idPersona']; ?>">Tiene registrados los datos, cargar control</a>
</button>

 <?php } ?>

 
</div>

<script>
    // (C) ATTACH AUTOCOMPLETE TO INPUT FIELDS
    window.addEventListener("DOMContentLoaded", function(){
          
      ac.attach({
        target: "dName",
        data: "search.php",
        
        // OPTIONAL
        delay : 500,
        min : 3
      });
    });
    </script>
 </body>
 </html>













  


