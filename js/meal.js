// Afficher le nom du repas dans la modal de création d'un repas
function displayModalTitle(title) {
  document.getElementById("mealModalTitle").innerHTML = title;
}

// Afficher l'alerte quand le nombre de calories journalières dépasse celui indiqué par l'utilisateur
function validateMealInfoForm() {
  let mealCalories = parseInt(document.getElementById("numberCaloriesForm").value);
  let defautCalories = parseInt(document.getElementById("numberCalories").innerHTML);
  if (mealCalories > defautCalories) {
    const myModal = new bootstrap.Modal(document.getElementById("modalAlertCalories"), {});
    myModal.show();
  }
}
