<?php
include __DIR__ . '/../include/autoload.php';
 
 //echo $_SERVER['REQUEST_URI'] . '-----';

$uri = strtok(ltrim($_SERVER['REQUEST_URI'], '/'), '?');

//echo $uri ;

$audinwebsite = new \ClassPart\AudinWebsite();
$entryPoint = new \ClassGrl\EntryPoint($audinwebsite);
$entryPoint->run($uri, $_SERVER['REQUEST_METHOD']);