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
   
      <legend>Buscar Caso</legend>
<form   action="" autocomplete="off" method="post" >
 
  <input  type="text" name="Nombres" id="dName">
 <input type="hidden"name="id_datos_benef" id="dTel" value="">

  <input type="submit" value="Buscar">
</form> 


</div>
<div>


</div>

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













  


