<?php
$emailValidation = new RegexValidation('@', 'Keine gültige Email-Adresse');
$telefonValidation = new RegexValidation('[\d \+\/\-\)\(]{10, 15}', 'Keine gültige Telefonnummer');
$personExistsValidation = new ExistsValidation('Person', 'Die Person existiert nicht');