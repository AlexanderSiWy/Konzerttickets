<?php
require 'app/Controllers/PersonForm.php';

$id->loadValue(false );
if($id->validate()) {
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name->loadValue();
        $email->loadValue();
        $telefon->loadValue();

        if($name->validate() & $email->validate() & $telefon->validate()) {
            $person = new Person($name->getValue(), $email->getValue(), $telefon->getValue());
            $person->setId($id->getValue());
            $person->update();
            redirect();
        }
    } else {
        $person = Person::findById($id->getValue());
        if(isset($person)) {
            $name->setValue($person->getName());
            $email->setValue($person->getMail());
            $telefon->setValue($person->getTel());
        } else {
            redirect();
        }
    }
} else {
    redirect();
}
$action = 'UpdatePerson?'.$id->getName().'='.$id->getValue();
$submitValue = 'Speichern';
require 'app/Views/person.view.php';

function redirect() {
    header('Location: Personen');
    exit(0);
}