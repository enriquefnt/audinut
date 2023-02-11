<?php
namespace ClassPart\Controllers;
/*
class Login {
public function __construct(private \ClassGrl\Authentication $authentication) {
}
*/
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
