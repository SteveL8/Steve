<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>excercice date ete heure</title>
</head>

<body>
<h3>Date et heure</h3>
<br>
    <!--//////////Exercice 1//////////-->


    <?php
    $datePattern = "/^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$/";
    $date = "2019-07-14";
    //Utilisation de la fonction 'strtotime' pour convertir la date ci-dessus en timestamp
    $a = strtotime($date);
    //Utilisation de la fonction 'date' pour  formater le timestamp($a)  dans un format spécifique. Dans ce cas, 'W' est utilisé comme format pour récupérer le numéro de la semaine à partir du timestamp '$a'.
    echo date('W', $a);
    echo "<br>";
    echo "<br>";
    ?>


    <!--//////////Exercice 2//////////-->

    <?php
    //Variables contenant la date d'aujourd'hui ($date) et la date de fin de formation ($date2)
    $date = "2023-07-10";
    $date2 = "2023-07-28";
    // créations de deux objet DateTime a apartir des date ci-dessus
    $d = new DateTime($date);
    $d2 = new DateTime($date2);
    //La méthode (diff) calcule la difference entre les deux dates de l'objet DateTime.L'argument true indique que la différence doit être retournée sous forme d'objet DateInterval. La propriété days de cet objet DateInterval représente le nombre de jours entre les deux dates.
    $days = $d->diff($d2, true)->days;
    echo "Il reste {$days} jusqu'à la fin de la formation.";
    echo "<br>";
    echo "<br>";
    ?>


    <!--//////////Exercice 3//////////-->


    <?php
    //Fonction cencé vérifier si l'année est bissextile 
    function aBissextile($annee)
    {
        if (($annee % 4 == 0 && $annee % 100 != 0) || $annee % 400 == 0) {
            return true;
        } else {
            return false;
        }
    }
    //Année verifier
    $annee = 2023;
   //Appel de la fonction (aBissextile) avec l'année donner et verifie  si elle renvoie true ou false
    if (aBissextile($annee)) {
        echo $annee . " est une année bissextile ! ";
    } else {
        echo $annee . " n'est pas une année bissextile";
    }
    echo "<br>";
    echo "<br>";
    ?>


    <!--//////////Exercice 4//////////-->


    <?php
    //Création de l'objet (DateTime) + definition du format de la date 
    $oDate =  DateTime::createFromFormat("d/m/Y", "32/17/2019");
    //Récupère les erreurs et les avertissements générés lors de la création de l'objet (DateTime)
    $errors = DateTime::getLastErrors();
    //Cette condition vérifie si le nombre d'erreurs (error_count) ou le nombre d'avertissements (warning_count) dans le tableau $errors est supérieur à zéro
    if ($errors["error_count"] > 0 || $errors["warning_count"] > 0) {
        echo "Date erronée !";
    }
    echo "<br>";
    echo "<br>";
    ?>


    <!--//////////Exercice 5//////////-->


    <?php
    // Récupérer l'heure et les minutes chacun dans une variable
    $heure = date("H");
    $minutes = date("i");

    // Afficher l'heure au format demandé
    echo $heure . "h" . $minutes;
    echo "<br>";
    echo "<br>";
    ?>


    <!--//////////Exercice 6//////////-->


    <?php
    //Appel de la date puis on ajoute 1 mois avec (+1 month) qui se transforme en timestamp grâce la fonction (strtotime)
    echo date("d/m/Y", strtotime("+1 month"));
    echo "<br>";
    echo "<br>";
    ?>


<!--//////////Exercice 7//////////-->


<?php
echo date("d/m/Y", 1000200000. );
echo "\n";
echo " : L'attentat sur les tours jumelles de New york. "
?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>