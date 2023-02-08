

 <div class="container">
    <form class="row g-6"  action="" autocomplete="off" method="post" >
<input type="text" name="label" id="dName" class="form-control form-control-lg" placeholder="Busca" />
<div class="col-sm-2">
      <button class="btn btn-primary" type="submit" name="submit">busca</button>
  </div>
	</form>
    
  </div>	



   <?php

echo $_POST['label'] . ' --- ' . $_POST['value'] ;
//print_r($data);
echo $data[0];

?>
 <script>

var auto_complete = new Autocom(document.getElementById('dName'), {
    data:<?php echo json_encode($data); ?>,
    maximumItems:10,
    highlightTyped:true,
    highlightClass : 'fw-bold text-primary'
}); 

</script>
    