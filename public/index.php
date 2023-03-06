<?php

include __DIR__ . '/../include/autoload.php';
 
$uri = strtok(ltrim($_SERVER['REQUEST_URI'], '/'), '?');

$audinwebsite = new \ClassPart\AudinWebsite();
$entryPoint = new \ClassGrl\EntryPoint($audinwebsite);
$entryPoint->run($uri, $_SERVER['REQUEST_METHOD']);

