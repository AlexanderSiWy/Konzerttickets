<form action="InsertPerson" method="post" >
    <fieldset>
        <legend>Personalien</legend>
        <div>
            <label for="name">Name</label>
        </div>
        <div>
            <input type="text" id="name" name = "name" placeholder="Max Muster" required />
        </div>
        <div>
            <label for="email">E-Mail</label>
        </div>
        <div>
            <input type="email" id="email" name="email" placeholder="max.muster@gmail.com" required>
        </div>
        <div>
            <label for="telefon">Telefonnummer</label>
        </div>
        <div>
            <input type="tel" id="telefon" name="telefon" placeholder="+41 79 000 00 00">
        </div>
    </fieldset>
    <div>
        <button type="reset">Zurücksetzen</button>
        <button type="submit" >Hinzufügen</button>
    </div>
</form>