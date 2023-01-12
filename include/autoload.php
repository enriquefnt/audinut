<?php

/*
function autoloader($className) {
$file = __DIR__ . '/../classes/' . $className . '.php';
include $file;
}
spl_autoload_register('autoloader');	
*/


function autoloader($className) {
$fileName = str_replace('\\', '/', $className) . '.php';
$file = __DIR__ . '/../' . $fileName;
include $file;

echo 'Filename:' . $fileName . '---';
echo 'File:' . $file . '---';


}
spl_autoload_register('autoloader');
/*

include __DIR__ . '/../include/conect.php';


Filename:ClassPart/Audinwebsite.php---File:C:\xampp\htdocs\audinut\include/../ClassPart/Audinwebsite.php---Filename:ClassGrl/EntryPoint.php---File:C:\xampp\htdocs\audinut\include/../ClassGrl/EntryPoint.php---
*/