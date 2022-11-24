<?php
	require 'conect.php';
	session_destroy();

	header('Location: /audinut/public/index.php');

?>
