console.log("Connecté")

document.getElementById("commande").addEventListener("submit", function (e) {

    var erreur;

    if (erreur) {
        e.preventDefault();
        document.getElementById("erreur").innerHTML = erreur;
        return false;
    } else {
        alert('Votre commande a bien été prise en compte !');
    }

});