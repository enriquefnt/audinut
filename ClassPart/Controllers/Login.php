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
$_SESSION['tipo']=$usuario['tipo'];
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
