<?php
$navItems = $router->routes;
unset($navItems['']);
require 'app/Views/menu.view.php';