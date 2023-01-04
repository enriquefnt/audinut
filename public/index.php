<?php
include_once '../classes/EntryPoint.php';

	$uri = strtok(ltrim($_SERVER['REQUEST_URI'], '/'), '?');

	$entryPoint = new EntryPoint();
	$entryPoint->run($uri);
 