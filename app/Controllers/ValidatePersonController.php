<?php
require 'app/Controllers/PersonForm.php';

$name->loadValue();
$email->loadValue();
$telefon->loadValue();

$name->validate();
$email->validate();
$telefon->validate();

echo json_encode([$name, $email, $telefon]);