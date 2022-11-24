
		
<div class="container-fluid" >
 
 <!-- 
  <h2 >Ingresar Usuario y contraseña</h2>

  <form  action="" method="post">
    <p><input type="text" name="usuario" value="<?php if(isset($_POST['usuario'])) echo $_POST['usuario'] ?>"placeholder="Usuario" autocomplete="on"></p>
    <p><input type="password" name="password" value="<?php if(isset($_POST['password'])) echo $_POST['password'] ?>" placeholder="Contraseña"></p>
    <p><input type="submit" name='login' value="Ingreso"></p>
  </form>
-->


<h2 >Ingresar Usuario y contraseña</h2>

  <form  onkeydown="return event.key != 'Enter';" class="row g-3"  action="" method="post" autocomplete="off">
    <input type="search" class="form-control form-control-sm" name="usuario" value="" placeholder="Usuario" id="usuario" autocomplete="Usuario">
    <input type="password" class="form-control form-control-sm" name="password" value="" id="password"  autocomplete="password" placeholder="Contraseña">
    <input type="submit" name='login' value="Ingreso">
  </form>

</div>


