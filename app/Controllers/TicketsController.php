<?php
require 'app/Controllers/PersonForm.php';

$tickets = Verkauf::findAll();

require 'app/Views/tickets.view.php';