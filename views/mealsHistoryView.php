<?php
$title = 'Meals History';

ob_start(); ?>
<h2>Historique des repas</h2>
<?php foreach ($meals as $meal) :
  echo '<div class="containerTable">
        <table class="oneDayOfMeals">
            <th colspan="4" class="date">' . $meal["meal_date"] . '
                <a href="../controllers/deleteMealController.php?action=deleteMeal&mealno=' . $meal["meal_id"] . '"><i class="bi bi-trash-fill"></i></a>
            </th>
            <tr>
                <td>' . $meal['meal_type'] . '</td>
                <td>' . $meal['meal_details'] . '</td>
                <td>' . $meal['calories'] . 'calories </td>
            </tr>
            <tr>
                <td>
                <a name="btnSnack" id="btnSnack" class="btnMeal" data-bs-toggle="modal" data-bs-target="#modalModifMeals"> <i class="bi bi-pencil-fill"></i></a>
                </td>
            </tr>
        </table>

<div class="modal fade" id="modalModifMeals" tabindex="-1" aria-labelledby="modalModifMeals" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border border-0" id="modalMealHeader">
        <div id="mealModalTitle"></div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="../controllers/modifyMealController.php?action=modifyMeal&mealno=' . $meal["meal_id"] . '" method="post">
        <div class="modalMeal-body">
          <div id="inputDate">
            <label for="modifDateMeal" class="form-label">Date du repas</label>
            <input type="date" id="dateMealModal" name="dateModif" value="' . $meal["meal_date"] . '" />
          </div>
          <div id="inputDate">
            <label for="modifTypeMeal" class="form-label">Type de repas</label>
            <input type="type" id="typeMealModal" name="typeModif" value="' . $meal["meal_type"] . '" />
          </div>
          <div id="numberOfCalories">
            <label for="numberCaloriesForm" class="form-label">Nombre de calories</label>
            <input type="text" class="form-control mb-4" id="modifNumberCalories" name="caloriesModif" placeholder="' . $meal['calories'] . '" required />
          </div>
          <div id="mealDetails">
            <label for="mealDescriptionForm" class="form-label">Décris ton repas</label>
            <textarea type="text" class="form-control" id="mealDescriptionForm" name="descriptionModif" placeholder="' . $meal['meal_details'] . '"></textarea>
          </div>
        </div>
        <div class="modal-footer border border-0">
          <button type="submit" class="btnModalMealForm" name="btnValider">Valider</button>
          <button type="button" class="btnModalMealForm">Annuler</button>
        </div>
      </form>
    </div>
  </div>
</div>

    </div>';
endforeach;
$content = ob_get_clean();
require 'template.php';
