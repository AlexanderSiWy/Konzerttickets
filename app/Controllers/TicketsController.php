<?php
require 'app/Controllers/PersonForm.php';

$showAll = new FormField('showAll');
$isShowAll = $showAll->isSet(false);
if($isShowAll) {
    $tickets = Verkauf::findAll();
} else {
    $tickets = Verkauf::findAllBy('zahlungsstatus', false);
}

require 'app/Views/tickets.view.php';