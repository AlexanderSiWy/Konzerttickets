<?php
$navItems = $router->routes;
foreach ($navItems as $key=>$value) {
    if($value->getName() == '') {
        unset($navItems[$key]);
    }
}
require 'app/Views/menu.view.php';