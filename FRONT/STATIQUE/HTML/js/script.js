console.log("Connecté")

document.getElementById("formcontact").addEventListener("submit", function (e) {

    var erreur;

    if (erreur) {
        e.preventDefault();
        document.getElementById("erreur").innerHTML = erreur;
        return false;
    } else {
        alert('Votre demande a bien été prise en compte !');
    }

});

