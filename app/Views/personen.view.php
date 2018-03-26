<table>
    <thead>
    <tr>
        <td>Name</td><td>E-Mail</td><td>Telefonnummer</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($personen as $person):?>
    <tr>
        <td><?=$person->getName()?></td><td><?=$person->getMail()?></td><td><?=$person->getTel()?></td>
    </tr>
    <?php endforeach;?>
    </tbody>
</table>

<a href="InsertPerson">Neu...</a>