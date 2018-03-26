<?php

require 'core/bootstrap.php';

require 'routes.php';

$uri = $_GET['uri'] ?? '';

$route = $router->parse($uri);
$title = $route->getName();
$bodyController = $route->getController();
if($route->isStandalone()) {
    require $bodyController;
} else {
    require 'app/Views/index.view.php';
}
