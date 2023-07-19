<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice php2</title>
</head>
<body>
<?php

/*Exercice 1///Nombres impairs entre 0et 150 de 2 en 2///*/
    $a = 1; 
    while ($a < 150) { 
        echo $a; 
        $a++; 
        $a++;
    } 
    echo "<br>";



/*Exercice 2///Je dois faire des sauvegardes régulières de mes fichiers X 500///*/
    /*$x = 0;
            
    while($a <= 500){
        echo 'Je dois faire des sauvegardes régulières de mes fichier <br>';
        $a++;
    }

    for ($i = 1; $i <= 9; $i++)
{
    Echo 'Table de multiplication de '.$i.'<br>';
    for ($j = 1; $j <= 9; $j++)
    {
        echo $i.' x '.$j.' = '.$i*$j.'<br>';
    }
}*/


/*Exercice 3///Ecrire un script qui affiche un tableau des table de multiplication de 1 à 9///*/

    $NbrCol = 9;
    $NbrLigne = 9;
//Debut du tableau 
    echo '<table border="1" width="400">';
//Première ligne du tableau 
    echo '<tr>';
    //En-tête  de la première colonne qui contient la valeur 0
    echo '<th>0</th>';
    //Boucle "for" qui génère les en-têtes des colonne de 1 à 9
    for ($j = 1; $j <= $NbrCol; $j++) {
        echo '<th>' . $j . '</th>';
    }
    echo '</tr>';
//Boucle qui génère le reste des lignes su tableau
    for ($i = 1; $i <= $NbrLigne; $i++) {
        echo '<tr>';
        //Boucle "for" qui génère les (<td>) pour chaque ligne.
        for ($j = 1; $j <= $NbrCol; $j++) {
            //Cette condition vérifie si le numéro de ligne ($i) est égal au numéro de colonne ($j). Si oui, 
            //elle ouvre un (<td>) et affiche la multiplication $i * $j. 
            //Sinon, elle ouvre un (<td>), mais vide.
            if ($j == 1) {
                echo '<th>' . $i . '</th>';
            }

            if ($i == $j) {
                echo '<td>';
            } else {
                echo '<td>';
            }


            echo $i * $j;

            echo '</td>';
        }
        echo '</tr>';
        $j = 1;
    }
    echo '</table>';
    ?>
</body>
</html>