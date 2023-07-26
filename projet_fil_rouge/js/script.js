console.log("Connecté");
//Fonction qui valide tous les champs du formulaire, la fonction est appelée quand on écrit dans n'importe quel champ.
//Elle vérifie les champs grâce  leur attribut "name" et de leur expression réguilière.
function validateForm() {
  const form = document.getElementById('formcontact');
  const inputs = form.querySelectorAll('input, textarea');
  let isFormValid = true;

  for (const input of inputs) {
    const fieldName = input.name;
    const fieldValue = input.value.trim();
    const small = input.nextElementSibling;
    //Utilisation de l'instruction "switch" pour la validation des champs et aussi leur assigner une expression régulière.
    switch (fieldName) {
      case 'nom':
      case 'prenom':
        const nameRegex = /^[a-zA-Z\s]+$/;
        if (nameRegex.test(fieldValue)) {
          small.innerHTML = "Champ valide";
          small.classList.remove("text-danger");
          small.classList.add("text-success");
        } else {
          small.innerHTML = "Champ invalide";
          small.classList.remove("text-success");
          small.classList.add("text-danger");
          isFormValid = false;
        }
        break;

      case 'mail':
        const emailRegex = /^[a-zA-Z0-9.\-_]+@[a-zA-Z_-]+\.[a-zA-Z]{2,3}$/;
        if (emailRegex.test(fieldValue)) {
          small.innerHTML = "Champ valide";
          small.classList.remove("text-danger");
          small.classList.add("text-success");
        } else {
          small.innerHTML = "Champ invalide";
          small.classList.remove("text-success");
          small.classList.add("text-danger");
        }
        break;

      case 'tel':
        const telRegex = /^0[1-9]([-. ]?[0-9]{2}){4}$/;
        if (telRegex.test(fieldValue)) {
          small.innerHTML = "Champ valide";
          small.classList.remove("text-danger");
          small.classList.add("text-success");
        } else {
          small.innerHTML = "Champ invalide";
          small.classList.remove("text-success");
          small.classList.add("text-danger");
        }
        break;

      case 'demande':
        const demandeRegex = /^[a-zA-Z\s]{1,300}$/;
        if (demandeRegex.test(fieldValue)) {
          small.innerHTML = "Champ valide";
          small.classList.remove("text-danger");
          small.classList.add("text-success");
        } else {
          small.innerHTML = "Champ invalide";
          small.classList.remove("text-success");
          small.classList.add("text-danger");
        }
        break;

      default:
        break;
    }
  }

  return isFormValid;
}

document.getElementById('formcontact').addEventListener('input', function (e) {
  validateForm(); // Appeler la fonction de validation à chaque modification d'un champ
});

document.getElementById('formcontact').addEventListener('submit', function (e) {
  if (!validateForm()) {
    e.preventDefault(); // Bloquer l'envoi du formulaire si un champ est invalide
  }
});


