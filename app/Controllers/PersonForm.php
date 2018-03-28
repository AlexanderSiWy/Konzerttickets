<?php

$id = new FormField('id', [$personExistsValidation], true);
$lengthValidation = new LengthValidation(255);
$name = new FormField('name', [$lengthValidation], true);
$email = new FormField('email', [$emailValidation, $lengthValidation], true);
$telefon = new FormField('telefon', [$telefonValidation, new LengthValidation(15)]);