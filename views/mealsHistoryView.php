<?php
$title = 'Meals History';

ob_start();
// foreach ($meals as $meal) : 
?>

<h2>Historique des repas</h2>
<div class="containerTable">
    <table class="oneDayOfMeals">
        <th colspan="4" class="date"> <? $date ?>
            <a href=""><i class="bi bi-pencil-fill"></i></a>
            <a href=""><i class="bi bi-trash-fill"></i></a>
        </th>
        <tr>

            <td>Petit-déjeuner</td>
            <td><? if ($type = "breakfast") {
                    echo $meal_details;
                } ?></td>
            <td><? if ($type = "breakfast") {
                    echo $calories;
                } ?></td>
            <td>
                <a href=""><i class="bi bi-pencil-fill"></i></a>
                <a href=""><i class="bi bi-trash-fill"></i></a>
            </td>
        </tr>
        <tr>
            <td>Déjeuner</td>
            <td><? if ($type = "lunch") {
                    echo $meal_details;
                } ?></td>
            <td><? if ($type = "lunch") {
                    echo $calories;
                } ?></td>
            <td>
                <a href=""><i class="bi bi-pencil-fill"></i></a>
                <a href=""><i class="bi bi-trash-fill"></i></a>
            </td>
        </tr>
        <tr>
            <td>Dîner</td>
            <td><? if ($type = "dinner") {
                    echo $meal_details;
                } ?></td>
            <td><? if ($type = "dinner") {
                    echo $calories;
                } ?></td>
            <td>
                <a href=""><i class="bi bi-pencil-fill"></i></a>
                <a href=""><i class="bi bi-trash-fill"></i></a>
            </td>
        </tr>
        <tr>
            <td>Encas</td>
            <td><? if ($type = "snack") {
                    echo $meal_details;
                } ?></td>
            <td><? if ($type = "snack") {
                    echo $calories;
                } ?></td>
            <td>
                <a href=""><i class="bi bi-pencil-fill"></i></a>
                <a href=""><i class="bi bi-trash-fill"></i></a>
            </td>
        </tr>
    </table>
</div>
<?php
// endforeach;
$content = ob_get_clean();
require 'template.php'; ?>