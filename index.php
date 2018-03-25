<?php

require 'core/bootstrap.php';

require 'routes.php';

$uri = $_GET['uri'] ?? '';

$route = $router->parse($uri);
$title = $route->getName();
$bodyController = $route->getController();
require 'app/Views/index.view.php';