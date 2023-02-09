
<?php
if (isset($errorMessage)):
echo '<div class="errors">Disculpe, no se encuentra su usuario o contraseña.</div>';
endif;
?>



<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">

    <div class="modal-content">
      


      <div class="modal-body">
        
        <div class="d-flex flex-column text-center">
          <form  action="" method="post">
            <div class="form-group">
            
            <input type="text" name="user" id="user" value=""  autocomplete="off" placeholder="Usuario">
            </div>
            <br>
            <div class="form-group">
              
            <input type="password" name="password" id="password" placeholder="Contraseña" value="" >
            </div>

              <br>
            <button type="submit" class="btn btn-primary" >Ingresar</button>
          </form>
          
          
      </div>
    </div>
      
  </div>
</div>

<script type="text/javascript">

$(document).ready(function() {$('#loginModal').modal('show');
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
});
</script>