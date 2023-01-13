<?php

/*
function autoloader($className) {
$file = __DIR__ . '/../classes/' . $className . '.php';
include $file;
}
spl_autoload_register('autoloader');	
*/


function autoloader($className) {
echo 'Clasnamme:' . $className . '---';
$fileName = str_replace('\\', '/', $className) . '.php';
$file = __DIR__ . '/../' . $fileName;
include $file;

echo 'Filename:' . $fileName . '---';
echo 'File:' . $file . '---';


}
spl_autoload_register('autoloader');

