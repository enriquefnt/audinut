<?php
include __DIR__ . '/../include/autoload.php';
 //include_once '../classes/EntryPoint.php';
 //include_once '../classes/Audinwebsite.php';


$uri = strtok(ltrim($_SERVER['REQUEST_URI'], '/'), '?');

//$audinwebsite = new Audinwebsite();
//$entryPoint = new EntryPoint($audinwebsite);
$audinwebsite = new \ClassPart\AudinWebsite();
$entryPoint = new \ClassGrl\EntryPoint($audinwebsite);
$entryPoint->run($uri);