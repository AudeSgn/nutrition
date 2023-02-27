inputToModif = document.querySelectorAll(".input");
pencil = document.querySelectorAll(".bi-pencil-fill");
console.log(inputToModif.length);

for (let i = 0; i < inputToModif.length; i++) {
  pencil[i].addEventListener("click", () => {
    console.log("coucou");
    inputToModif[i].removeAttribute("readonly");
    inputToModif[i].style.backgroundColor = "transparent";
  });
}
