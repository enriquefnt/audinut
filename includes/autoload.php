<?php
function autoloader($className) {
$fileName = str_replace('\\', '/', $className) . '.php';
$file = __DIR__ . '/../' . $fileName;
include $file;
}



//echo $filename .'<br>' . ?? 'nada!' ;
//echo $file ?? 'nada';

spl_autoload_register('autoloader');
