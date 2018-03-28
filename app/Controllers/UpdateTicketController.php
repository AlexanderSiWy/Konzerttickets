<?php
require 'app/Controllers/TicketForm.php';

$id->loadValue(false );
if($id->validate()) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $personId->loadValue();
        $konzertId->loadValue();
        $zahlungsstatus->loadValue();


        if ($personId->validate() & $konzertId->validate() & $zahlungsstatus->validate()) {
            $ticket = new Ticket($personId->getValue(), $konzertId->getValue(), null, $zahlungsstatus->getValue());
            $ticket->setId($id->getValue());
            $ticket->update();
            redirect();
        }
    } else {
        $ticket = Ticket::findById($id->getValue());
        if(isset($ticket)) {
            $personId->setValue($ticket->getPersonId());
            $konzertId->setValue($ticket->getKonzertId());
            $treuebonusId->setValue($ticket->getTreueBonusId());
            $zahlungsstatus->setValue($ticket->getZahlungsstatus());
        } else {
            redirect();
        }
    }
}

require 'app/Controllers/ticketViewPrepareController.php';

$datum = isset($ticket) ? formatDateISO($ticket->getDatumAsDateTime()) : formatDateISO();
$treuebonusAktiv = false;

$action = 'UpdateTicket?'.$id->getName().'='.$id->getValue();
$submitValue = 'Speichern';
require 'app/Views/ticket.view.php';

function redirect() {
    header('Location: Tickets');
    exit(0);
}