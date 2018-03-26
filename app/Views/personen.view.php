<table>
    <thead>
    <tr>
        <td>Name</td><td>E-Mail</td><td>Telefonnummer</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($personen as $person):?>
    <tr>
        <td><?=e($person->getName())?></td><td><?=e($person->getMail())?></td><td><?=e($person->getTel())?></td><td><a href="UpdatePerson?<?=$id->getName()?>=<?=$person->getId()?>">Bearbeiten...</a></td>
    </tr>
    <?php endforeach;?>
    </tbody>
</table>

<a href="InsertPerson">Neu...</a>