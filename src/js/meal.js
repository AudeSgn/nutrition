// Afficher le nom du repas dans la modal de création d'un repas
function displayModalTitle(title) {
  document.getElementById("mealModalTitle").innerHTML = title;
  document.getElementById("typeOfMeal").value = title;
}

// Afficher l'alerte quand le nombre de calories journalières dépasse celui indiqué par l'utilisateur
// function validateMealInfoForm() {
//   let mealCalories = parseInt(document.getElementById("numberCaloriesForm").value);
//   let defautCalories = parseInt(document.getElementById("numberCalories").innerHTML);
//   if (mealCalories > defautCalories) {
//     alert(" Tu as dépassé ton apport en calorie journalier recommandé !");
//   }
// }

// Indiquer si l'IMC est
$bmiType = document.querySelector("#imcType");
$bmi = document.querySelector("#imcNumber").innerHTML;

console.log($bmi);

if ($bmi < 18.5) {
  $bmiType.innerHTML = "Maigreur";
} else if ($bmi > 18.5 && $bmi < 25) {
  $bmiType.innerHTML = "Normal";
} else if ($bmi > 25 && $bmi < 20) {
  $bmiType.innerHTML = "Surpoids";
} else if ($bmi > 30 && $bmi < 40) {
  $bmiType.innerHTML = "Obésité modérée";
} else if ($bmi > 40) {
  $bmiType.innerHTML = "Obésité sévère";
}
