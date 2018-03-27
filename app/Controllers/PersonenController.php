<?php
require 'app/Controllers/PersonForm.php';
$personen = Person::findAll('name');
require 'app/Views/personen.view.php';