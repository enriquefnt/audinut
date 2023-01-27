<?php
if (isset($errorMessage)):
echo '<div class="errors">Disculpe, no se encuentra su usuario o contraseña.</div>';
endif;
?>
<div class="container-fluid">

    <h1 class="text-center">Ingresar Usuario y contraseña</h1>
    <form  action="" method="post">
        <div >
            <label for="usuario" class="form-label">Usuario</label>
            <input type="text" name="usuario" id="usuario" value=""  autocomplete="off">
        </div>
        <div >
            <label for="password" class="form-label">contraseña</label>
            <input type="password" name="password" id="password" value="" >
        </div>
        <button type="submit" class="btn btn-light mt-3">Ingresar</button>
       
    </form>

</div>








