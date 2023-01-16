<?php
/*
function autoloader($className) {
$file = __DIR__ . '/../Classes/' . $className . '.php';
include $file;
}
spl_autoload_register('autoloader');
*/
function autoloader($className) {
$fileName = str_replace('\\', '/', $className) . '.php';
$file = __DIR__ . '/../' . $fileName;
include $file;
}


//echo 'Classname' . $className ;






spl_autoload_register('autoloader');