<?php

$router = new Router();

$table = new Route('app/Controllers/TicketsController.php', 'Tickets');

$router->define([
    '' => $table,
    'tickets' => $table
]);