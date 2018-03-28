<?php
require 'app/Controllers/TicketForm.php';

$personId->loadValue();
$konzertId->loadValue();
$treuebonusId->loadValue();
$zahlungsstatus->loadValue();

$personId->validate();
$konzertId->validate();
$zahlungsstatus->validate();

$action = $_GET['action'];
if(!isset($action) || $action == 'InsertTicket') {
    $treuebonusId->validate();
}
echo json_encode([$personId, $konzertId, $treuebonusId, $zahlungsstatus]);