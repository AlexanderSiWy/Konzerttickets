<?php
$setPayedIds = $_POST['setPayed'];

foreach ($setPayedIds as $id) {
    Verkauf::updateZahlungsstatus($id, 1);
}

header('Location: Tickets');
exit(0);