<?php
require 'app/Controllers/PersonForm.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name->loadValue();
    $email->loadValue();
    $telefon->loadValue();

    if($name->validate() & $email->validate() & $telefon->validate()) {
        $person = new Person($name->getValue(), $email->getValue(), $telefon->getValue());
        $person->insert();
        header('Location: Personen');
        exit(0);
    }
}
$action = 'InsertPerson';
$submitValue = 'Hinzufügen';
require 'app/Views/person.view.php';