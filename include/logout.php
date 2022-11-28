<?php
	// require 'conect.php';
	session_write_close();
	session_destroy();

	header('Location: /audinut/public/index.php');

?>
