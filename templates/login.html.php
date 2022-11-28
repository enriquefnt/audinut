<!--
  <div class="container-fluid">
  
  <h5>Ingresar Usuario y contraseña</h5>

  <form class="login-container" action="" method="post">
    <p><input type="text" name="usuario" value="<?php if(isset($_POST['usuario'])) echo $_POST['usuario'] ?>"placeholder="Usuario" autocomplete="on"></p>
    <p><input type="password" name="password" value="<?php if(isset($_POST['password'])) echo $_POST['password'] ?>" placeholder="Contraseña"></p>
    <p><input type="submit" name='login' value="Ingreso"></p>
  </form>
</div>

-->
<div class="container-fluid">

    <h1 class="text-center">Ingresar Usuario y contraseña</h1>
    <form  action="" method="post">
        <div >
            <label for="usuario" class="form-label">User</label>
            <input type="text" name="usuario" id="usuario" value=""  autocomplete="off">
        </div>
        <div >
            <label for="password" class="form-label">contraseña</label>
            <input type="password" name="password" id="password" value="" >
        </div>
        <button type="submit" class="btn btn-light mt-3">Ingresar</button>
       
    </form>

</div>