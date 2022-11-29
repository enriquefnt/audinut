<?php
	
include __DIR__ . '/../include/conect.php';


session_start();

	if(isset($_POST['login'])) {
		$errMsg = '';

		// Get data from FORM
		$NomUsuario = $_POST['usuario'];
		//$Contraseña = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$Contraseña = $_POST['password'];

		if($NomUsuario == '')
			$errMsg = 'Ingrese nombre de usuario';
		if($Contraseña == '')
			$errMsg = 'Ingrese la Contraseña';

		if($errMsg == '') {
			try {
			$stmt = $pdo->prepare('SELECT * FROM datos_usuarios 
					WHERE usuario = :NomUsuario');
				$stmt->execute(array(
					':NomUsuario' => $NomUsuario
					));
				$data = $stmt->fetch(PDO::FETCH_ASSOC);

				if($data == false){
					$errMsg = "El usuario $NomUsuario no existe.";
				}
				else {

						if (password_verify($Contraseña, $data['password']))
					 {
				$_SESSION['apellido'] = $data['apellido'];
				$_SESSION['nombre'] = $data['nombre'];
				$_SESSION['establecimiento_nombre'] = $data['establecimiento_nombre'];
				$_SESSION['tipo'] = $data['tipo'];
				$_SESSION['id_usuario'] = $data['id_usuario'];


				//		print_r($_SESSION);
						header('Location: /audinut/include/inicio.php');
						

						exit;
					}
					else
						$errMsg = 'Contraseña erronea';
				}
			}
			catch(PDOException $e) {
				$errMsg = $e->getMessage();
			}
		}
	}
?>

<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../estilos/estilo_login.css">
	<link rel="shortcut icon" href="../public/ico_descu.png">
</head>
<header class="login-header">
Ingreso a listados
</header>

<body>
		
<div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Ingresar Usuario y contraseña</h2>

  <form class="login-container" action="" method="post">
    <p><input type="text" name="usuario" id="usuario" value="" placeholder="Usuario" autocomplete="off"></p>
    <p><input type="password" name="password" value="" autocomplete="off" placeholder="Contraseña"></p>
    <p><input type="submit" name='login' value="Ingreso"></p>
  </form>


</div>
<?php
				if(isset($errMsg)){
					echo '<div class="error-msg">' .$errMsg .'</div>';
				}
			?>

<script type="text/javascript">
(function() {
    var some_id = document.getElementById('usuario');
    some_id.type = 'text';
    some_id.removeAttribute('autocomplete');
})();
</script>
</body>
</html>