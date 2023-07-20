console.log("Connecté")

/*Cette fonction est responsable de valider le champ en fonction de l'expression régulière fournie./
   Crée une instance de l'objet "RegExp" avec l'expression régulière puis elle récupère l'élément HTML ('small') qui contiendra le message de validation*/
function champValide(inputElement, regExpPattern) {
    const regex = new RegExp(regExpPattern);
    const small = inputElement.nextElementSibling;


/*Affiche dans la console la valeur du champ (inputElement.value) ainsi que l'expression régulière utilisée./*/
    console.log("Valeur du champ:", inputElement.value);
    console.log("Expression régulière:", regex);

/*Teste si la valeur du champ correspond à l'expression régulière à l'aide de regex.test(inputElement.value)*/
    if (regex.test(inputElement.value)) {
        small.innerHTML = "Champ valide";
        small.classList.remove("text-danger");
        small.classList.add("text-success");
        return true;
    } else {
        small.innerHTML = "Champ non valide";
        small.classList.remove("text-success");
        small.classList.add("text-danger");
        return false;
    }
}

// Validation des champs nom, prénom, email, téléphone et demande
//nameRegex : Permet uniquement les lettres (majuscules et minuscules) et les espaces pour les champs nom et prénom.
const nameRegex = /^[a-zA-Z\s]+$/;
//L'évenement "change" permet d'écouter les modification du formulaire,
//et quand un champ est modifier la function "valideField" est appelé pour modifier le champ avec son expression régulière.
document.getElementById('formcontact').addEventListener('change', function (e) {
    switch (e.target.name) {
        case 'nom':
        case 'prenom':
            champValide(e.target, nameRegex);
            break;
        case 'mail':
          champValide(e.target, /^[a-zA-Z0-9.\-_]+@[a-zA-Z_-]+\.[a-zA-Z]{2,3}$/);
            break;
        case 'tel':
          champValide(e.target, /^0[1-9]([-. ]?[0-9]{2}){4}$/);
            break;
        case 'demande':
          champValide(e.target, /^[a-zA-Z\s]{1,300}$/);
            break;
        default:
            break;
    }
});
//Fonction qui sert a vérifier si un champ est vide, si le champ est vide elle retourne true sinon false.
function siChampVide(inputElement) {
    return inputElement.value.trim() === '';
}

// Nouvelle fonction pour mettre à jour l'affichage du message de validation
function majMessage(inputElement, isValid) {
    const small = inputElement.nextElementSibling;
    const { classList } = small;
  
    if (isValid) {
      small.innerHTML = "Champ valide";
      classList.remove("text-danger");
      classList.add("text-success");
    } else {
      small.innerHTML = "Champ non valide";
      classList.remove("text-success");
      classList.add("text-danger");
    }
  }
  

// Nouveau gestionnaire d'événement pour le clic sur le bouton "Envoyer"
document.getElementById('envoyer').addEventListener('click', (e) => {
    e.preventDefault();
    const form = document.getElementById('formcontact');
    const inputs = form.querySelectorAll('input, textarea');
  //Utilise la fonction siChampVide(input) pour vérifier si le champ est vide, 
  //et la fonction validateField(input, regexPattern) pour vérifier si le contenu du champ correspond à l'expression régulière associée.
    let isFormValid = true;
    for (const input of inputs) {
      if (siChampVide(input)) {
        isFormValid = false;
        majMessage(input, false);
      } else {
        const regexPattern = ValidationRegex(input);
        const isValid = champValide(input, regexPattern);
        majMessage(input, isValid);
        isFormValid = isFormValid && isValid;
      }
    }
  
    if (isFormValid) {
      form.submit(); // Utilisez la méthode submit() pour envoyer le formulaire.
    }
  });
  
  