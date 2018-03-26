<?php
require 'app/Controllers/TicketForm.php';

$id->loadValue(false );
if($id->validate()) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $personId->loadValue();
        $konzertId->loadValue();
        $treuebonusId->loadValue();
        $zahlungsstatus->loadValue();

        if ($personId->validate() & $konzertId->validate() & $treuebonusId->validate() & $zahlungsstatus->validate()) {
            $ticket = new Verkauf($personId->getValue(), $konzertId->getValue(), $treuebonusId->getValue(), $zahlungsstatus->getValue(), date("Y-m-d"));
            $ticket->setId($id->getValue());
            $ticket->update();
            redirect();
        }
    } else {
        $ticket = Verkauf::findById($id->getValue());
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
$treueboni = Treuebonus::findAll();
$konzerte = Konzert::findAll();
$personen = Person::findAll();

$action = 'UpdateTicket?'.$id->getName().'='.$id->getValue();
$submitValue = 'Speichern';
require 'app/Views/ticket.view.php';

function redirect() {
    header('Location: Tickets');
    exit(0);
}