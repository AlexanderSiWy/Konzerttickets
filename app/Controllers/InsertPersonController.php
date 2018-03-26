<?php
require 'app/Controllers/PersonForm.php';

$telefon->loadValue();
echo $telefon->getValue();
$telefon->setRequired(false);
if($telefon->validate()) {echo "valid";}else{echo "notValid";}

require 'app/Views/insertperson.view.php';