<?php

 include_once '../classes/EntryPoint.php';
 include_once '../classes/Audinwebsite.php';


$uri = strtok(ltrim($_SERVER['REQUEST_URI'], '/'), '?');

$audinwebsite = new Audinwebsite();
$entryPoint = new EntryPoint($audinwebsite);
$entryPoint->run($uri);