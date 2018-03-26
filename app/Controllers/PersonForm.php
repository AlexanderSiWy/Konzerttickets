<?php

$name = new FormField('name', [], true);
$email = new FormField('email', [$emailValidation], true);
$telefon = new FormField('telefon', [$telefonValidation]);