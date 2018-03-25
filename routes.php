<?php

$router = new Router();

$table = new Route('app/Controllers/TableController.php', 'Tickets');

$router->define([
    '' => $table,
    'tickets' => $table
]);