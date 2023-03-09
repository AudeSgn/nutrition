<?php
$title = 'Homepage';
session_start();
ob_start();
?>
<div class="container">
  <div id="buttonsRound">
    <div id="btnImc">
      <div class="insideButtonsRound">
        <p>IMC :</p>
        <p id="imcNumber"><?= $_SESSION["auth"]["bmi"] ?></p>
        <p id="imcType">Normal</p>
        <button type="button" name="btnDetails" id="btnDetails" data-bs-toggle="modal" data-bs-target="#modalDetailsImc">Détails</button>
      </div>
    </div>
    <div id="btnCalories">
      <div class="insideButtonsRound">
        <p>Calories/j</p>
        <p id="numberCalories"><?= $_SESSION["auth"]["calories"] ?></p>
        <p>kcal</p>
      </div>
    </div>
  </div>

  <div id="desktopVersion">
    <div id="buttonsMeals">
      <div id="breakfast" class="allBtnMeal">
        <button type="button" name="btnBreakfast" id="btnBreakfast" class="btnMeal" onclick="displayModalTitle('Petit-déjeuner')" data-bs-toggle="modal" data-bs-target="#modalMeals" data-type="breakfast">
          <img src="../assets/img/breakfast.png" class="imgMeal" />
        </button>
        <p class="typeMeal">Petit-déjeuner</p>
      </div>
      <div id="diner" class="allBtnMeal">
        <button type="button" name="btnDiner" id="btnDiner" class="btnMeal" onclick="displayModalTitle('Diner')" data-bs-toggle="modal" data-bs-target="#modalMeals" data-type="diner">
          <img src="../assets/img/diner.png" class="imgMeal" />
        </button>
        <p class="typeMeal">Diner</p>
      </div>
      <div id="lunch" class="allBtnMeal">
        <button type="button" name="btnLunch" id="btnLunch" class="btnMeal" onclick="displayModalTitle('Déjeuner')" data-bs-toggle="modal" data-bs-target="#modalMeals" data-type="lunch">
          <img src="../assets/img/salad.png" class="imgMeal" />
        </button>
        <p class="typeMeal">Déjeuner</p>
      </div>

      <div id="snack" class="allBtnMeal">
        <button type="button" name="btnSnack" id="btnSnack" class="btnMeal" onclick="displayModalTitle('Encas')" data-bs-toggle="modal" data-bs-target="#modalMeals" data-type="snack">
          <img src="../assets/img/tea.png" class="imgMeal" />
        </button>
        <p class="typeMeal">Encas</p>
      </div>
    </div>

    <div id="graphCalories">
      <canvas class="barCanvas" aria-label="chart"></canvas>
      <div id="historic">
        <a href="../controllers/displayMealController.php?action=displayMeals">
          <button type="button" name="btnHistoric" id="btnHistoric">Voir mes repas</button>
        </a>
      </div>
    </div>
  </div>


</div>

<!-- ..............................Modal IMC-->

<div class="modal fade" id="modalDetailsImc" tabindex="-1" aria-labelledby="modalDetailsImc" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border border-0">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-bodyImc">
        <h1 class="modal-title fs-5 mb-" id="titleImcModal">Ton IMC</h1>
        <img src="../assets/img/imcDiagram.jpg" id="imgImcModal" />
        <p id="descriptionImcModal">
          L'IMC est le sigle pour Indice de Masse Corporelle. L'IMC permet de calculer la corpulence d'un individu selon sa taille et son poids. L'IMC est utilisé pour détecter les problèmes
          d'obésité ou de sous-poids.
        </p>
      </div>
    </div>
  </div>
</div>

<!-- .................................Modal buttons Meals -->
<div class="modal fade" id="modalMeals" tabindex="-1" aria-labelledby="modalMeals" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border border-0" id="modalMealHeader">
        <div id="mealModalTitle"></div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="<?php echo "../controllers/addMealController.php?action=createMeal" ?>" method="post">
        <div class="modalMeal-body">
          <div id="inputDate">
            <input type="date" id="dateMealModal" name="meal_date" value="<?php echo date('Y-m-d') ?>" />
          </div>

          <input type="hidden" id="typeOfMeal" name="typeOfMeal">
          <div id="numberOfCalories">
            <label for="numberCaloriesForm" class="form-label">Nombre de calories</label>

            <input type="text" class="form-control mb-4" id="numberCaloriesForm" name="calories" placeholder="Indique le nombre de calories de ton repas" required />

          </div>
          <div id="mealDetails">
            <label for="mealDescriptionForm" class="form-label">Décris ton repas</label>
            <textarea type="text" class="form-control" id="mealDescriptionForm" name="details" placeholder="Décris ton repas" required></textarea>
          </div>
        </div>
        <div class="modal-footer border border-0">
          <button type="submit" class="btnModalMealForm" name="btnValider" onclick="validateMealInfoForm()">Valider</button>
          <button type="button" class="btnModalMealForm">Annuler</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- .........................................Modal alerte nombre calories dépassées -->
<div class="modal fade" id="modalAlertCalories" tabindex="-1" aria-labelledby="modalAlertCalories" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" id="modalAlertContent">
      <div class="modal-header border border-0">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h1 class="modal-title fs-5 mb-" id="titleImcModal">ATTENTION</h1>
        <p id="alertCaloriesModal">Tu as dépassé ton apport en calorie journalier recommandé !</p>
      </div>
    </div>
  </div>

</div>
<?php
$content = ob_get_clean();
require 'template.php';
?>