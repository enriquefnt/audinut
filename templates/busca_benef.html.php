

 <div class="container">
    <form class="row g-6"  action=""   >
<input type="text" name="label" id="dName" class="form-control form-control-lg" >
<input type="hidden" name="value" id="dName" value="value">
      <button class="btn btn-primary" type="submit" name="submit">busca</button>
  </div>
	</form>
    
  </div>	



   <?php /*

echo $_GET['label'] . ' --- ' . $_POST['value'] ;
//print_r($data);
echo $data[0];
*/
?>
 <script>

var auto_complete = new Autocom(document.getElementById('dName'), {
    data:<?php echo json_encode($data); ?>,
    maximumItems:10,
    highlightTyped:true,
    highlightClass : 'fw-bold text-primary'
}); 

</script>
    