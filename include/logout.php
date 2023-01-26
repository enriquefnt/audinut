<?php
	// require 'conect.php';
	$_SESSION = [];
	session_write_close();
	session_destroy();

	header('Location: /audinut/public/index.php');
?>
