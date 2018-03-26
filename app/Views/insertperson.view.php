<form action="InsertPerson" method="post" >
    <fieldset>
        <legend>Personalien</legend>
        <div>
            <label for="name">Name</label>
        </div>
        <div>
            <input type="text" id="name" name = "<?= $name->getName() ?>" value="<?= $name->getValue()?>" placeholder="Max Muster" required />
            <p><?= $name->getMessage() ?></p>
        </div>
        <div>
            <label for="email">E-Mail</label>
        </div>
        <div>
            <input type="email" id="email" name="<?= $email->getName() ?>" value="<?= $email->getValue()?>" placeholder="max.muster@gmail.com" required>
            <p><?= $email->getMessage() ?></p>
        </div>
        <div>
            <label for="telefon">Telefonnummer</label>
        </div>
        <div>
            <input type="tel" id="telefon" name="<?= $telefon->getName() ?>" value="<?= $telefon->getValue()?>" placeholder="+41 79 000 00 00">
            <p><?= $telefon->getMessage() ?></p>
        </div>
    </fieldset>
    <div>
        <button type="reset">Zurücksetzen</button>
        <button type="submit" >Hinzufügen</button>
    </div>
</form>