<form id="personForm" data-validate="ValidatePerson" action="<?=$action?>" method="post" >
    <fieldset>
        <legend>Personalien</legend>
        <div>
            <label for="name">Name</label>
        </div>
        <div>
            <input type="text" id="name" name = "<?= $name->getName() ?>" value="<?= $name->getValue()?>" placeholder="Max Muster" required />
            <p id="<?= $name->getName() ?>Message"><?= $name->getMessage() ?></p>
        </div>
        <div>
            <label for="email">E-Mail</label>
        </div>
        <div>
            <input type="email" id="email" name="<?= $email->getName() ?>" value="<?= $email->getValue()?>" placeholder="max.muster@gmail.com" required>
            <p id="<?= $email->getName() ?>Message"><?= $email->getMessage() ?></p>
        </div>
        <div>
            <label for="telefon">Telefonnummer</label>
        </div>
        <div>
            <input type="tel" id="telefon" name="<?= $telefon->getName() ?>" value="<?= $telefon->getValue()?>" placeholder="+41 79 000 00 00">
            <p id="<?= $telefon->getName() ?>Message"><?= $telefon->getMessage() ?></p>
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
<script src="public/js/validate.js"></script>