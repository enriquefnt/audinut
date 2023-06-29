<?php
namespace ClassGrl;
interface Website {
/* public function getDefaultRoute();
public function getController(string $controllerName);
*/
public function getDefaultRoute(): string;
public function getController(string $controllerName): ?object;
public function checkLogin(string $uri): ?string;
}