<div class="container">
    <form action="">
        <div class="col">
            <label for="nbLicence">Numero de licence :</label>
            <input type="text" id="nbLicence" name="nbLicence" required>

            <label for="id_account">Identifiant:</label>
            <input type="text" id="id_account" name="id_account" required>

            <label for="name_account">Nom:</label>
            <input type="text" id="name_account" name="name_account" required>

            <label for="first_name_account">Prénom:</label>
            <input type="text" id="first_name_account" name="first_name_account" required>

            <label for="gender">Genre</label>
            <select name="gender">
                <option>--Sélectionner--</option>
                <option value="M">M</option>
                <option value="F">F</option>
                <option value="A">Autre</option>
            </select>




        </div>
        <div class="col">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="email_confirmation">Confirmation de l'email:</label>
            <input type="email" id="email_confirmation" name="email_confirmation" required>

            <label for="password">Mots de passe</label>
            <input type="password" id="nivGam" name="nivGam" required>
            <label for="password_confirm">Confirmation du mots de passe</label>
            <input type="password" id="password_confirm" name="password_confirm" required>
        </div>
        <input type="submit" value="Créer le compte">
    </form>
</div>