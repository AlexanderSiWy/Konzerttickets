<?php
require 'app/Controllers/PersonForm.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name->loadValue();
    $email->loadValue();
    $telefon->loadValue();

    if($name->validate() & $email->validate() & $telefon->validate()) {
        header('Location: Success');
        exit(0);
    }
}
require 'app/Views/insertperson.view.php';