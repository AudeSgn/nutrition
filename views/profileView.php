<?php
$title = 'Profile';

ob_start();
?>
<a href="../controllers/homeController.php">
    <i class="bi bi-arrow-left-circle-fill"></i>
</a>
<div id="containerForm">
    <form action="../controllers/updateProfileController.php" method="post" id="profileForm">
        <div class="responsiveLines">

            <div class="inline">
                <div>
                    <label for="username" class="formElement"> Identifiant <i class="bi bi-pencil-fill"></i></label>
                    <input readonly="readonly" type="text" name="username" value="<?= $username ?>" class="formElement input">
                </div>
                <div>
                    <label for="password" class="formElement"> Mot de passe <i class="bi bi-pencil-fill"></i></label>
                    <input readonly="readonly" type="password" name="password" class="formElement input">
                </div>

                <div>
                    <label for="lastame" class="formElement"> Nom <i class="bi bi-pencil-fill"></i></label>
                    <input readonly="readonly" type="text" name="lastname" value="<?= $lastname ?>" class="formElement input">
                </div>
            </div>
            <div class="inline">
                <div>
                    <label for="firstname" class="formElement"> Prénom <i class="bi bi-pencil-fill"></i></label>
                    <input readonly="readonly" type="text" name="firstname" value="<?= $firstname ?>" class="formElement input">
                </div>
                <div>

                    <label for="birthdate" class="formElement"> Date de naissance <i class="bi bi-pencil-fill" id="updateBirthdate"></i></label>
                    <input readonly="readonly" type="date" id="inputBirthdate" name="birthdate" value="<?= $birthdate ?>" class="formElement input">
                </div>
                <div>
                    <label for="gender" class="selectInput"> Sexe <i class="bi bi-pencil-fill"></i>
                        <select name="gender" id="gender">
                            <option value="0">Femme</option>
                            <option value="1">Homme</option>
                        </select>
                    </label>
                </div>
            </div>
        </div>
        <div>
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