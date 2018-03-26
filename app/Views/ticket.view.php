<form action="<?=$action?>" method="post" >
    <fieldset>
        <legend>Personalien</legend>
        <div>
            <label for="person">Person</label>
        </div>
        <div>
            <select id="person" name="<?=$personId->getName()?>" required">
            <?php foreach ($personen as $person):?>
                <option value="<?=$person->getId()?>" <?= $person->getId() == $personId->getValue() ? 'selected' : ''?>><?=$person->getName()?></option>
            <?php endforeach; ?>
            </select>
            <input type="button" value="+" onclick="newPerson();" />
            <input type="button" value="Bearbeiten" onclick="editPerson();" />
            <p><?= $personId->getMessage() ?></p>
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
            <p><?= $konzertId->getMessage() ?></p>
        </div>
        <div>
            <label for="treuebonus">Treuebonus</label>
        </div>
        <div>
            <select id="treuebonus" name="<?=$treuebonusId->getName()?>" required">
                <?php foreach ($treueboni as $treuebonus):?>
                    <option value="<?=$treuebonus->getId()?>" <?= $treuebonus->getId() == $treuebonusId->getValue() ? 'selected' : ''?>><?=$treuebonus->getDescription()?></option>
                <?php endforeach; ?>
            </select>
            <p><?= $treuebonusId->getMessage() ?></p>
        </div>
        <div>
            <label for="zahlungsstatus">Zahlungsstatus</label>
        </div>
        <div>
            <select id="zahlungsstatus" name="<?=$zahlungsstatus->getName()?>" required>
                <option value="0" <?= $zahlungsstatus->getValue() ? '' : 'selected'?>><?= Verkauf::zahlungsStatusDescription(false)?></option>
                <option value="1" <?= $zahlungsstatus->getValue() ? 'selected' : ''?>><?= Verkauf::zahlungsStatusDescription(true)?></option>
            </select>
            <p><?= $zahlungsstatus->getMessage() ?></p>
        </div>
        <div>
            <label for="zahlbarBis">Zahlbar bis</label>
        </div>
        <div>
            <input type="text" id="zahlbarBis" disabled>
        </div>
    </fieldset>

    <div>
        <button type="reset">Zurücksetzen</button>
        <button type="submit" ><?=$submitValue?></button>
    </div>
</form>