<?php
require 'app/Controllers/TicketForm.php';

$personId->loadValue();
$konzertId->loadValue();
$treuebonusId->loadValue();
$zahlungsstatus->loadValue();

$personId->validate();
$konzertId->validate();
$treuebonusId->validate();
$zahlungsstatus->validate();

echo json_encode([$personId, $konzertId, $treuebonusId, $zahlungsstatus]);