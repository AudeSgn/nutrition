<?php
$title = 'Meals History';

ob_start(); ?>
<h2>Historique des repas</h2>
<?php foreach ($meals as $meal) :
    echo '<div class="containerTable">
        <table class="oneDayOfMeals">
            <th colspan="4" class="date">' . $meal["meal_date"] . '
                <a href=""><i class="bi bi-pencil-fill"></i></a>
                <a href=""><i class="bi bi-trash-fill"></i></a>
            </th>
            <tr>
                <td>' . $meal['meal_type'] . '</td>
                <td>' . $meal['meal_details'] . '</td>
                <td>' . $meal['calories'] . 'calories </td>
                <td>
                    <a href=""><i class="bi bi-pencil-fill"></i></a>
                    <a href=""><i class="bi bi-trash-fill"></i></a>
                </td>
            </tr>
        </table>
    </div>';
endforeach;
$content = ob_get_clean();
require 'template.php';
