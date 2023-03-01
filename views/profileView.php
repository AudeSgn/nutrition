<?php
$title = 'Profile';

ob_start(); ?>

<div id="containerForm">
    <form action="" id="profileForm">
        <div class="responsive3lines">
            <div class="inline">
                <div>
                    <label for="username" class="formElement"> Identifiant <i class="bi bi-pencil-fill"></i></label>
                    <input readonly="readonly" type="text" name="username" placeholder="<? $username ?>" class="formElement input">
                </div>
                <div>
                    <label for="password" class="formElement"> Mot de passe <i class="bi bi-pencil-fill"></i></label>
                    <input readonly="readonly" type="password" name="password" class="formElement input">
                </div>
            </div>
            <div class="inline">
                <div>
                    <label for="lastame" class="formElement"> Nom <i class="bi bi-pencil-fill"></i></label>
                    <input readonly="readonly" type="text" name="lastname" placeholder="<? $lastname ?>" class="formElement input">
                </div>
                <div>
                    <label for="firstname" class="formElement"> Prénom <i class="bi bi-pencil-fill"></i></label>
                    <input readonly="readonly" type="text" name="firstname" placeholder="<? $firstname ?>" class="formElement input">
                </div>
            </div>
            <div class="inline">
                <div>
                    <label for="birthdate" class="formElement"> Date de naissance <i class="bi bi-pencil-fill"></i></label>
                    <input readonly="readonly" type="text" name="birthdate" placeholder="<? $birthdate ?>" class="formElement input">
                </div>
                <div id="radio">
                    <label for="gender" class="formElement">Sexe</label>
                    <div>
                        <input type="radio" name="gender" value="F">F
                        <input type="radio" name="gender" value="M">M
                    </div>
                </div>
            </div>
        </div>
        <div class="responsive3lines">
            <div class="inline">
                <div>
                    <label for="weight" class="formElement"> Poids (kgs) <i class="bi bi-pencil-fill"></i></label>
                    <input readonly="readonly" type="number" name="weight" placeholder="<? $weight ?>" class="formElement input">
                </div>
                <div>
                    <label for="height" class="formElement"> Taille (cm) <i class="bi bi-pencil-fill"></i> </label>
                    <input readonly="readonly" type="number" name="height" placeholder="<? $height ?>" class="formElement input">
                </div>
            </div>
            <div class="inline">
                <div>
                    <label for="calories" class="formElement"> Calories journalières <i class="bi bi-pencil-fill"></i></label>
                    <input readonly="readonly" type="number" name="calories" placeholder="<? echo calculCalorie($result) ?>" class="formElement input">
                </div>
            </div>
            <div class="bottomForm">
                <button type="submit" id="profileSubmitBtn"> Valider </button>
                <a id="deleteBtn" href="#" onclick="return confirm('La suppression de votre compte est définitive. Confirmez-vous cette opération ?')"> Supprimer mon compte </a>
            </div>
        </div>
    </form>
</div>
<?php $content = ob_get_clean();
require 'template.php' ?>