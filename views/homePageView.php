<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Page Accueil</title>
  <link rel="stylesheet" href="./style/homePageView.css" />
  <link rel="stylesheet" href="./style/designSystem.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
</head>

<body>
  <div class="bubble1"></div>
  <div class="bubble2"></div>
  <div class="bubble3"></div>
  <div class="container">
    <div id="buttonsRound">
      <div id="btnImc">
        <div class="insideButtonsRound">
          <p>IMC :</p>
          <p id="imcNumber"></p>
          <p id="imcType">Normal</p>
          <button type="button" name="btnDetails" id="btnDetails" data-bs-toggle="modal" data-bs-target="#modalDetailsImc">Détails</button>
        </div>
      </div>
      <div id="btnCalories">
        <div class="insideButtonsRound">
          <p>Calories/j</p>
          <p id="numberCalories">360</p>
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
        <canvas id="barCanvas" aria-label="chart"></canvas>
      </div>
    </div>
    <div id="historic">
      <a href="">
        <button type="button" name="btnHistoric" id="btnHistoric">Voir mes repas</button>
      </a>
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
        <div class="modalMeal-body">
          <div id="inputDate">
            <input type="date" id="dateMealModal" value="<?php echo date('Y-m-d'); ?>" />
          </div>
          <form method="post" action="" id="formMeal">
            <div id="numberOfCalories">
              <label for="numberCaloriesForm" class="form-label">Nombre de calories</label>
              <input type="text" class="form-control mb-4" id="numberCaloriesForm" name="calories" placeholder="Indique le nombre de calories de ton repas" />
            </div>
            <div id="mealDetails">
              <label for="mealDescriptionForm" class="form-label">Nombre de calories</label>
              <textarea type="text" class="form-control" id="mealDescriptionForm" name="description" placeholder="Décris ton repas"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer border border-0">
          <button type="button" class="btnModalMealForm" onclick="validateMealInfoForm()" data-bs-dismiss="modal" data-bs-toggle="modal">Valider</button>
          <button type="button" class="btnModalMealForm">Annuler</button>
        </div>
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
  <script src="js/graphic.js"></script>
  <!-- <script src="../views/js/meal.js"></script> -->

  <script>
    function displayModalTitle(title) {
      document.getElementById("mealModalTitle").innerHTML = title;
    };

    function validateMealInfoForm() {
      console.log("toto");
      // Afficher modal alert quand calories souhaitais dépassées
      let mealCalories = parseInt(document.getElementById("numberCaloriesForm").value);
      let defautCalories = parseInt(document.getElementById("numberCalories").innerHTML);
      // Si le numbre afficher dans l'input est supérieur au nombre de calories journalier choisi par l'utilisateur
      if (mealCalories > defautCalories) {

        const myModal = new bootstrap.Modal(document.getElementById('modalAlertCalories'), {});
        myModal.show();
        //une alert est crée au clique du bouton Valider
      }
    }
  </script>


  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>