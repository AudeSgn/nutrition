<?php
$title = 'Profile';
ob_start(); ?>
<div id="containerForm">

    <form action="<?php echo "./controllers/updateProfileController.php?action=updateProfileInformations" ?>" id="profileForm">
        <div class="responsive3lines">
            <div class="inline">
                <div>
                    <label for="username" class="formElement"> Identifiant <i class="bi bi-pencil-fill"></i></label>
                    <input readonly="readonly" type="text" name="username" placeholder="<?= $username ?>" class="formElement input">
                </div>
                <div>
                    <label for="password" class="formElement"> Mot de passe <i class="bi bi-pencil-fill"></i></label>
                    <input readonly="readonly" type="password" name="password" class="formElement input">
                </div>

                <div>
                    <label for="lastame" class="formElement"> Nom <i class="bi bi-pencil-fill"></i></label>
                    <input readonly="readonly" type="text" name="lastname" placeholder="<?= $lastname ?>" class="formElement input">
                </div>
            </div>
            <div class="inline">
                <div>
                    <label for="firstname" class="formElement"> Prénom <i class="bi bi-pencil-fill"></i></label>
                    <input readonly="readonly" type="text" name="firstname" placeholder="<?= $firstname ?>" class="formElement input">
                </div>
                <div>
                    <label for="birthdate" class="formElement"> Date de naissance <i class="bi bi-pencil-fill"></i></label>
                    <input readonly="readonly" type="date" name="birthdate" placeholder="<?= $birthdate ?>" class="formElement input">
                </div>
                <div>
                    <label for="gender" class="selectInput"> Sexe
                        <select name="gender" id="gender">
                            <option value="0">Femme</option>
                            <option value="1">Homme</option>
                        </select>
                    </label>
                </div>
            </div>
        </div>
        <div class="responsive2Lines">
            <div class="inline">
                <div>
                    <label for="weight" class="formElement"> Poids (kgs) <i class="bi bi-pencil-fill"></i></label>
                    <input readonly="readonly" type="number" name="weight" placeholder="<?= $weight ?>" class="formElement input">
                </div>
                <div>
                    <label for="height" class="formElement"> Taille (cm) <i class="bi bi-pencil-fill"></i> </label>
                    <input readonly="readonly" type="number" name="height" placeholder="<?= $size ?>" class="formElement input">
                </div>
            </div>
            <div class="inline">
                <div>
                    <label for="sport" class="selectInput"> Sport
                        <select name="sportiveActivity" id="sport_select">
                            <option value="0">Inactif</option>
                            <option value="1">Actif</option>
                            <option value="2">Sportif</option>
                        </select>
                    </label>
                </div>
            </div>
            <div class="bottomForm">
                <button class="button" type="submit" id="profileSubmitBtn"> Valider </button>
                <a id="deleteBtn" href="#" onclick="return confirm('La suppression de votre compte est définitive. Confirmez-vous cette opération ?')"> Supprimer mon compte </a>
            </div>

        </div>
    </form>
</div>
<?php $content = ob_get_clean();
require 'template.php' ?>