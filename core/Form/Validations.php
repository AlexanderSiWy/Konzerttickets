<?php
$emailValidation = new RegexValidation('@', 'Keine gültige Email-Adresse');
$telefonValidation = new RegexValidation('^[\d \+\/\-\)\(]+$', 'Keine gültige Telefonnummer');
$isBoolValidation = new RegexValidation('^[10]$', 'Keine gültiger Wert');

$personExistsValidation = new ExistsValidation('Person', 'Die Person existiert nicht');
$konzertExistsValidation = new ExistsValidation('Konzert', 'Das Konzert existiert nicht');
$treuebonusExistsValidation = new ExistsValidation('Treuebonus', 'Der Treuebonus existiert nicht');
$ticketExistsValidation = new ExistsValidation('Ticket', 'Das Ticket existiert nicht');