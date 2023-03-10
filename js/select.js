// on s'assure que le DOM est chargé

window.onload = () => {
  //on récupére le select

  const selectElt = document.querySelector("select");

  // on recupere la 1 ere div "custom-select"

  const selectDiv = document.querySelector(".activity-container");

  //on crée le nouveau select (une div)

  const newSelect = document.createElement("div");

  // on lui ajoute la classe "new-select"

  newSelect.classList.add("new-select");

  // on lui donne le contenu de l'option

  newSelect.innerHTML = selectElt.options[selectElt.selectedIndex].innerHTML;

  //on cree l'élément dans le DOM

  selectDiv.appendChild(newSelect);

  //on cree le menu deroulant qui est une div

  const newMenu = document.createElement("div");
  newMenu.classList.add("select-items", "select-hide");

  // on va boucler sur toutes les options dans le select et les copier dans la div

  for (let option of selectElt.options) {
    // on cree une div pour cette option

    const newOption = document.createElement("div");

    //on copie le contenu de l'option

    newOption.innerHTML = option.innerHTML;

    // on ajoute un ecouteur d'evenement sur option

    newOption.addEventListener("click", function () {
      // on boucle sur chacune des options du select original

      for (let option of selectElt.options) {
        if (option.innerHTML === this.innerHTML) {
          // on acitve la bonne option dans le select
          selectElt.selectedIndex = option.index;

          //on change le texte de notre "newselect"

          newSelect.innerHTML = this.innerHTML;

          break;
        }
      }

      // on "simule" un click sur newselect

      newSelect.click();
    });

    // on ajoute l'option dans le "newMenu"

    newMenu.appendChild(newOption);
  }

  //on affiche le menu

  selectDiv.appendChild(newMenu);

  //on ajoute l'ecouteur d'evenement click sur newselect

  newSelect.addEventListener("click", function (e) {
    //on empeche la propagation du click

    e.stopPropagation();

    // on retire le "select-hide" de notre menu

    this.nextSibling.classList.toggle("select-hide");

    // on ajoute la classe active new select (changer la fleche)

    this.classList.toggle("active");

    // on modifie l'attribut "contenteditable" pour pouvoir taper une valeur

    if (this.getAttribute("contenteditable") == "true") {
      this.setAttribute("contenteditable", "false");
    } else {
      this.setAttribute("contenteditable", "true");

      // on donne le focus a notre champ

      this.focus();
    }
  });

  // on met en place le filtre de contenu sur l evenement input

  newSelect.addEventListener("input", function () {
    // on recupere la saisi en minuscule
    let saisie = this.textContent.toLowerCase();

    // on parcourt tous les enfants de notre menu

    for (let option of newMenu.children) {
      //on verifie si la saisie existe dans la chaine

      if (option.textContent.toLowerCase().search(saisie) > -1) {
        option.style.display = "block";
      } else {
        option.style.display = "none";
      }
    }
  });
};
