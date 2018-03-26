<?php
require 'app/Controllers/PersonForm.php';
$personen = Person::findAll();
require 'app/Views/personen.view.php';