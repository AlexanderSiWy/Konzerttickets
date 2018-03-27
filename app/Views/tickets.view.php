<a href="Tickets<?=$isShowAll?'':'?'.$showAll->getName()?>"><?=$isShowAll?'Zeige Offene':'Zeige Alle'?></a>
<table class="table table-striped table-sm">
    <thead>
    <tr>
        <th>Person</th><th>Konzert</th><th>Treuebonus</th><th>Zahlbar bis</th><th>Zahlungsstatus</th><th></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($tickets as $ticket):?>
        <tr>
            <td><?=e($ticket->getPerson()->getName())?></td><td><?=e($ticket->getKonzert()->getArtist())?></td><td><?=e($ticket->getTreuebonus()->getDescription())?></td><td><?=e(formatDate($ticket->getZahlbarBis()))?></td><td><?=e(Verkauf::zahlungsStatusDescription($ticket->getZahlungsstatus()))?><span class="payStatus"><?=$ticket->getZahlungsstatus() ? '✓' : ($ticket->isOverDue() ? '⏳' : '⌛')?></span></td><td><a href="UpdateTicket?<?=$id->getName()?>=<?=$ticket->getId()?>">Bearbeiten</a></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>
<a href="InsertTicket">Neu...</a>