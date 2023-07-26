console.log("Connecté");

function validateForm() {
    const form = document.getElementById('formco');
    const inputs = form.querySelectorAll('input, textarea');
    let isFormValid = true;

    for (const input of inputs) {
        const fieldName = input.name;
        const fieldValue = input.value.trim();
        const small = input.nextElementSibling;

        switch (fieldName) {
            case 'nomEtPrenom':
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
                    isFormValid = false;
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
                    isFormValid = false;
                }
                break;

            case 'adresse':
                const adresseRegex = /^[a-zA-Z\s]{1,300}$/;
                if (adresseRegex.test(fieldValue)) {
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

            default:
                break;
        }
    }

    return isFormValid;
}

document.getElementById('formco').addEventListener('input', function (e) {
    validateForm(); // Appeler la fonction de validation à chaque modification d'un champ
});

document.getElementById('formco').addEventListener('submit', function (e) {
    if (!validateForm()) {
        e.preventDefault(); // Bloquer l'envoi du formulaire si un champ est invalide
    }
});
