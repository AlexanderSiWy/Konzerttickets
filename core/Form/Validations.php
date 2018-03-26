<?php
$emailValidation = new Validation('@', 'Keine gültige Email-Adresse');
$telefonValidation = new Validation('[\d \+\/\-\)\(]{10, 15}', 'Keine gültige Telefonnummer');