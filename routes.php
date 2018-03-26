<?php

$router = new Router();

$router->define([
    '' => new Route('app/Controllers/TicketsController.php'),
    'Tickets' => new Route('app/Controllers/TicketsController.php', 'Tickets'),
    'InsertTicket' => new Route('app/Controllers/InsertTicketController.php', 'Ticket Hinzufügen'),
    'UpdateTicket' => new Route('app/Controllers/UpdateTicketController.php'),
    'Personen' => new Route('app/Controllers/PersonenController.php', 'Personen'),
    'InsertPerson' => new Route('app/Controllers/InsertPersonController.php', 'Person Hinzufügen'),
    'UpdatePerson' => new Route('app/Controllers/UpdatePersonController.php')
]);