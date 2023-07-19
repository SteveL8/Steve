<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>excercice fonction php</title>
</head>

<body>


    <?php

    //////////Exercice 1//////////

    function lien($url, $titre)
    {
        echo '<a href=' . $url . '>' . $titre . '</a>';
    }
    lien("https://www.reddit.com/", "Reddit Hug");

    echo lien($url, $titre)

    ?>
    <br>
    <br>
    <!--//////////Exercice 2//////////-->

    <?php

    //////////Premiere essai //////////-->


    /* <?php
$tab = array(4, 3, 8, 2);

    function somme()
    {
        global $stab;
        global $resultat;
        $resultat = 0;
        array_sum($stab);
        $resultat = array_sum($stab);

       }
       echo "La somme des valeurs du tableau est ".$resultat;
    

    somme();
    ?>*/

    //////////Deuxième essai //////////-->


    /*$tab = array(4, 3, 8, 2);

    function somme()
    {
        global $tab;
        $resultat=0;
       foreach ($tab as  $value) {
        $resultat+=$value;
       }
       echo "La somme des valeurs du tableau est ".$resultat;
    }

    somme();*/
    ?>
    <?php
    function somme($stab)
    {
        $resultat = 0;
        foreach ($stab as $value) {
            $resultat += $value;
        }
        echo "La valeur du tableau est " . $resultat;
    }
    somme(array(4, 3, 8, 2))
    ?>
    <br>
    <br>
    <br>

    <!--//////////Excercice 3 //////////-->

    <?php
    function mdp($password)
    {
        // Vérifier la longueur du mot de passe
        if (strlen($password) < 8) {
            return false;
        }

        // Vérifier la présence d'au moins un chiffre
        if (!preg_match('/\d/', $password)) {
            return false;
        }

        // Vérifier la présence d'une une majuscule et une minuscule
        if (!preg_match('/[A-Z]/', $password) || !preg_match('/[a-z]/', $password)) {
            return false;
        }


        return true;
    }

    // Exemple 
    $resultat = mdp("TopSecret42");
    echo $resultat ? 'true' : 'false';

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>