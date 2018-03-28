<a href="Tickets<?=$isShowAll?'':'?'.$showAll->getName()?>"><?=$isShowAll?'Zeige Offene':'Zeige Alle'?></a>
<form action="SetTicketPayed" method="post">
<table class="table table-striped table-sm">
    <thead>
    <tr>
        <th></th><th>Person</th><th>Konzert</th><th>Treuebonus</th><th>Zahlbar bis</th><th>Zahlungsstatus</th><th></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($tickets as $ticket):?>
        <tr>
            <td><input type="checkbox" name="setPayed[]" value="<?=$ticket->getId()?>" <?=$ticket->getZahlungsstatus() ? 'disabled' : ''?>></td>
            <td><?=e($ticket->getPerson()->getName())?></td>
            <td><?=e($ticket->getKonzert()->getArtist())?></td>
            <td><?=e($ticket->getTreuebonus()->getDescription())?></td>
            <td><?=e(formatDate($ticket->getZahlbarBis()))?></td>
            <td><?=e(Verkauf::zahlungsStatusDescription($ticket->getZahlungsstatus()))?><span class="payStatus"><?=$ticket->getZahlungsstatus() ? '✓' : ($ticket->isOverDue() ? '⏳' : '⌛')?></span></td>
            <td><a href="UpdateTicket?<?=$id->getName()?>=<?=$ticket->getId()?>">Bearbeiten</a></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>
    <div>
        <input type="reset" value="Zurücksetzen">
        <input type="submit" value="Setze Bezahlt">
    </div>
</form>
<a href="InsertTicket">Neu...</a>