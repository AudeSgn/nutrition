<?php
$title = 'Meals History';

ob_start(); ?>
<div class="containerHistory">
  <h2>Historique des repas</h2>
  <div class="containerTable">
    <?php foreach ($meals as $meal) :
      $timestampToDate = strtotime($meal["meal_date"]);
      $date = date("d/m/y", $timestampToDate);
      echo '<table class="oneDayOfMeals">
        <th colspan="4" class="date">
          <div>' . $date . '</div>
          <div><a href="../controllers/deleteMealController.php?action=deleteMeal&mealno=' . $meal["meal_id"] . '"><i class="bi bi-trash-fill"></i></a></div>
        </th>
        <tr>
          <td>' . $meal['meal_type'] . ':</td>
          <td>' . $meal['meal_details'] . '</td>
          <td>-' . $meal['calories'] . 'calories- </td>
          <td><a data-bs-toggle="modal" data-bs-target="#modalModifMeals' . $meal["meal_id"] . '"> <i class="bi bi-pencil-fill"></i></a></td>
        </tr>
      </table>
    <div class="modal fade" id="modalModifMeals' . $meal["meal_id"] . '" tabindex="-1" aria-labelledby="modalMeals" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header border border-0" id="modalMealHeader">
            <div id="mealModalTitle"></div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="../controllers/modifyMealController.php?action=modifyMeal&mealno=' . $meal["meal_id"] . '" method="post">
              <div class="modalMeal-body">
                <div id="inputDate">
                  <input type="date" id="dateMealModal" name="dateModif" value="' . $meal["meal_date"] . '" />
                </div>
                <div id="numberOfCalories">
                  <label for="numberCaloriesForm" class="form-label">Nombre de calories</label>
                  <div class="erreur"></div>
                  <input type="text" class="form-control mb-4" id="numberCaloriesForm" name="caloriesModif" placeholder="' . $meal['calories'] . '" required value="" />
                </div>
                <div id="mealDetails">
                  <label for="mealDescriptionForm" class="form-label">Décris ton repas</label>
                  <input type="type" id="typeMealModal" name="descriptionModif" value="' . $meal["meal_details"] . '" />
                </div>
              </div>
              <div class="modal-footer border border-0">
                <button type="submit" class="btnModalMealForm" name="btnValider" onclick="validateMealInfoForm()">Valider</button>
                <button type="button" class="btnModalMealForm">Annuler</button>
              </div>
            </form>
          </div>
        </div>
      </div>';
    endforeach; ?>
  </div>

</div>
<?php $content = ob_get_clean();
require 'template.php'; ?>