<?php
require 'app/Controllers/PersonForm.php';

$showAll = new FormField('showAll');
$isShowAll = $showAll->isSet(false);
if($isShowAll) {
    $tickets = Ticket::findAll();
} else {
    $tickets = Ticket::findAllBy('zahlungsstatus', false);
}

usort($tickets, function($a, $b) {
    $ad = $a->getZahlbarBis();
    $bd = $b->getZahlbarBis();

    if ($ad == $bd) {
        return 0;
    }

    return $ad < $bd ? -1 : 1;
});

require 'app/Views/tickets.view.php';