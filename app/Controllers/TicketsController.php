<?php
require 'app/Controllers/PersonForm.php';

$showAll = new FormField('showAll');
$isShowAll = $showAll->isSet(false);
$orderBy = 'datum';
if($isShowAll) {
    $tickets = Verkauf::findAll($orderBy);
} else {
    $tickets = Verkauf::findAllBy('zahlungsstatus', false, $orderBy);
}

require 'app/Views/tickets.view.php';