<form action="<?=$action?>" data-validate="ValidateTicket" method="post" >
    <fieldset>
        <legend>Personalien</legend>
        <div>
            <label for="person">Person</label>
        </div>
        <div>
            <select id="person" name="<?=$personId->getName()?>" onchange="setPersonInfo();" required">
            <?php foreach ($personen as $person):?>
                <option value="<?=$person->getId()?>" data-email="<?=$person->getMail()?>" data-tel="<?=$person->getTel()?>"<?= $person->getId() == $personId->getValue() ? 'selected' : ''?>><?=$person->getName()?></option>
            <?php endforeach; ?>
            </select>
            <input type="button" value="+" onclick="newPerson();" />
            <input type="button" value="Bearbeiten" onclick="editPerson();" />
            <p id="<?= $personId->getName() ?>Message"><?= $personId->getMessage() ?></p>
        </div>
        <div>
            <label for="email">E-Mail</label>
        </div>
        <div>
            <input type="text" id="email" disabled>
        </div>
        <div>
            <label for="telefon">Telefonnummer</label>
        </div>
        <div>
            <input type="tel" id="telefon" disabled>
        </div>
    </fieldset>


    <fieldset>
        <legend>Ticket</legend>
        <div>
            <label for="konzert" >Konzert</label>
        </div>
        <div>
            <select id="konzert" name="<?=$konzertId->getName()?>" required">
            <?php foreach ($konzerte as $konzert):?>
                <option value="<?=$konzert->getId()?>" <?= $konzert->getId() == $konzertId->getValue() ? 'selected' : ''?>><?=$konzert->getArtist()?></option>
            <?php endforeach; ?>
            </select>
            <p id="<?= $konzertId->getName() ?>Message"><?= $konzertId->getMessage() ?></p>
        </div>
        <div>
            <label for="treuebonus">Treuebonus</label>
        </div>
        <div>
            <select id="treuebonus" name="<?=$treuebonusId->getName()?>" onchange="setZahlbarBis();" required">
                <?php foreach ($treueboni as $treuebonus):?>
                    <option value="<?=$treuebonus->getId()?>" data-zahlungsfrist="<?=$treuebonus->getZahlungsfrist()?>" <?= $treuebonus->getId() == $treuebonusId->getValue() ? 'selected' : ''?>><?=$treuebonus->getDescription()?></option>
                <?php endforeach; ?>
            </select>
            <p id="<?= $treuebonusId->getName() ?>Message"><?= $treuebonusId->getMessage() ?></p>
        </div>
        <div>
            <label for="zahlungsstatus">Zahlungsstatus</label>
        </div>
        <div>
            <select id="zahlungsstatus" name="<?=$zahlungsstatus->getName()?>" required>
                <option value="0" <?= $zahlungsstatus->getValue() ? '' : 'selected'?>><?= Verkauf::zahlungsStatusDescription(false)?></option>
                <option value="1" <?= $zahlungsstatus->getValue() ? 'selected' : ''?>><?= Verkauf::zahlungsStatusDescription(true)?></option>
            </select>
            <p id="<?= $zahlungsstatus->getName() ?>Message"><?= $zahlungsstatus->getMessage() ?></p>
        </div>
        <div>
            <label for="zahlbarBis">Zahlbar bis</label>
        </div>
        <div>
            <input type="text" data-datum="<?=$datum?>" id="zahlbarBis" disabled>
        </div>
    </fieldset>

    <div>
        <button type="reset">Zurücksetzen</button>
        <button type="submit" ><?=$submitValue?></button>
    </div>
    <div>
        <p id="<?= $id->getName() ?>Message">
            <?=$id->getMessage()?>
        </p>
    </div>
</form>
<script src="public/js/ticket.js"></script>
<script src="public/js/validate.js"></script>