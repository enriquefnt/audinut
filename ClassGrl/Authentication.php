<?php
namespace ClassGrl;
/* class Authentication {
public function __construct(private DataTables $users, private string $usernameColumn, private string $passwordColumn) {
	session_start();
}
*/
class Authentication {

	private $users;
	private $usernameColumn;
	private $passwordColumn;

public function __construct( DataTables $users,  string $usernameColumn, string $passwordColumn) {
	session_start();
	$this->users = $users;
	$this->usernameColumn = $usernameColumn;
	$this->passwordColumn = $passwordColumn;


}

public function login(string $username, string $password): bool {
	
	$user = $this->users->find($this->usernameColumn, strtolower($username));
	
	if (!empty($user) && password_verify($password, $user[0][$this->passwordColumn])) {
	session_regenerate_id();
	
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $user[0][$this->passwordColumn];

	
	return true;
	
	} else {
	return false;
}
	$_SESSION['nombre'] = $user['nombre'];
}

public function isLoggedIn(): bool {
	if (empty($_SESSION['username'])) {
	return false;
	}
		$user = $this->users->find($this->usernameColumn, strtolower($_SESSION['username']));

		if (!empty($user) && $user[0][$this->passwordColumn] === $_SESSION['password']) {
		return true;
		} else {
		return false;
	}
	}


public function getUser(): ?array {
if ($this->isLoggedIn()) {
$user = $this->users->find($this->usernameColumn, strtolower($_SESSION['username']))[0];
return $user;
}
else {
return false;
}
}




public function logout() {
	unset($_SESSION['username']);
	unset($_SESSION['password']);
	session_regenerate_id();
	}
}