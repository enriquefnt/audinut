<?php
namespace ClassGrl;
interface Website {
    public function getDefaultRoute();
    public function getController(string $controllerName);
}

