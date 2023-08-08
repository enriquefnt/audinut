<?php
namespace ClassPart\Controllers;

class Login {

	private $authentication;
public function __construct( \ClassGrl\Authentication $authentication) {

	$this->authentication = $authentication;
}
public function login() {
return ['template' => 'login.html.php',
'title' => 'Ingreso'
];
}

public function loginSubmit() {
$success = $this->authentication->login($_POST['user'],$_POST['password']);
	if ($success) {
	
$usuario = $this->authentication->getUser();



$_SESSION['nombre']=$usuario['nombre'];
$_SESSION['apellido']=$usuario['apellido'];

//if ($usuario['tipo']=='')
switch ($usuario['tipo']) {
	case 'Administrador' :
		$_SESSION['tipo']=0;
		break;
case 'Auditor' :
	$_SESSION['tipo']=1;
	break;
case 'Profesional' :
	$_SESSION['tipo']=2;
	break;
case 'Administrativo' :
	$_SESSION['tipo']=3;
	break;
case 'Otros' : 
	$_SESSION['tipo']=4;
	break;
}




//$_SESSION['tipo']=$usuario['tipo'];
$_SESSION['establecimiento_nombre']=$usuario['establecimiento_nombre'];


	return ['template' => 'loginSuccess.html.php',
	'title' => 'Ingreso OK'
	
];
}
	else {
		return ['template' => 'login.html.php',
		'title' => 'Ingreso',
		'variables' => [
		'errorMessage' => true
		]
	];
}
}

public function logout() {
$this->authentication->logout();
header('location: /');
}
}
