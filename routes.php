<?php

$router = new Router();

$table = new Route('app/Controllers/TicketsController.php', 'Tickets');

$router->define([
    '' => $table,
    'tickets' => $table,
    'Personen' => new Route('app/Controllers/PersonenController.php', 'Personen'),
    'InsertPerson' => new Route('app/Controllers/InsertPersonController.php', 'Person Hinzufügen')
]);