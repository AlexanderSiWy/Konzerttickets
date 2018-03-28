<?php
$setPayedIds = $_POST['setPayed'];

foreach ($setPayedIds as $id) {
    Ticket::updateZahlungsstatus($id, 1);
}

header('Location: Tickets');
exit(0);