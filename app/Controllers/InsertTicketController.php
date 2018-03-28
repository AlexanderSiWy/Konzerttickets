<?php
require 'app/Controllers/TicketForm.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $personId->loadValue();
    $konzertId->loadValue();
    $treuebonusId->loadValue();
    $zahlungsstatus->loadValue();

    if($personId->validate() & $konzertId->validate() & $treuebonusId->validate() & $zahlungsstatus->validate()) {
        $ticket = new Ticket($personId->getValue(), $konzertId->getValue(), $treuebonusId->getValue(), $zahlungsstatus->getValue(), formatDateISO());
        $ticket->insert();
        header('Location: Tickets');
        exit(0);
    }
}

require 'app/Controllers/ticketViewPrepareController.php';

$datum = formatDateISO();

$action = 'InsertTicket';
$submitValue = 'Hinzufügen';
require 'app/Views/ticket.view.php';