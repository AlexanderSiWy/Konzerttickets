<a href="Tickets<?=$isShowAll?'':'?'.$showAll->getName()?>"><?=$isShowAll?'Zeige Offene':'Zeige Alle'?></a>
<table>
    <thead>
    <tr>
        <td>Person</td><td>Konzert</td><td>Treuebonus</td><td>Zahlungsstatus</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($tickets as $ticket):?>
        <tr>
            <td><?=e($ticket->getPerson()->getName())?></td><td><?=e($ticket->getKonzert()->getArtist())?></td><td><?=e($ticket->getTreuebonus()->getDescription())?></td><td><?=e(Verkauf::zahlungsStatusDescription($ticket->getZahlungsstatus()))?></td><td><a href="UpdateTicket?<?=$id->getName()?>=<?=$ticket->getId()?>">Bearbeiten</a></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>

<a href="InsertTicket">Neu...</a>