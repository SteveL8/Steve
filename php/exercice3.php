<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>excercice tableau php</title>
</head>

<body>

    <!--///Exercice 1///Tableau des mois et jours puis dans 2éme tableau triés pas leur nombres de jours-->

    <h3>Liste des mois suivie de leur nombre de jour respective</h3>
    <?php

    $mois = array(
        "Janvier"   =>  31,
        "Février"   =>  28,
        "Mars"  =>  31,
        "Avril" =>  30,
        "Mai" => 31,
        "Juin" => 30,
        "Juillet" => 31,
        "Aout" => 31,
        "Septembre" => 30,
        "Octobre" => 31,
        "Novembre" => 30,
        "Décembre" => 31,
    );
    ?>
    <table class="table table-success w-25 table-striped-columns">
        <tr>
            <th>Mois</th>
            <th>Nombre de jours</th>
        </tr>
        <!--Boucles "foreach" qui parcours le tableau pour récupèré
         chaque clé (le nom du mois) dans la variable $nomMois et chaque valeur (le nombre de jours) dans la variable $nbJours.-->
        <?php foreach ($mois as $nomMois => $nbJours) { ?>
            <tr>
                <!--Affiche le nom du mois dans (<td>) de la première colonne du tableau.-->
                <td><?php echo $nomMois; ?></td>
                <!--Affiche le nombre de jours du mois dans (<td>) de la deuxième colonne du tableau.-->
                <td><?php echo $nbJours; ?></td>
            </tr>
        <?php } ?>
    </table>
    <br>
    <br>
    <h3>Liste des mois en ordre croissant par rappaort a leur nombre de jour</h3>
    <?php

//Trie Le tableau"$mois" par ordre croissant par rapport a leur nombrede jours.
    asort($mois);

    echo '<table class="table table-warning w-25 table-striped-columns">';
    echo '<tr>';
    echo '<th>Mois</th>';
    echo '<th>Nombre de jours</th>';
    echo '</tr>';

    foreach ($mois as $nomMois => $nbJours) {
        echo '<tr>';
        echo '<td>' . $nomMois . '</td>';
        echo '<td>' . $nbJours . '</td>';
        echo '</tr>';
    }

    echo '</table>';
    ?>
    <br>
    <br>

    <!--///Exercice 2///-->
    <h3>Liste des pays et de leur capitales par ordre alphabétique.</h3>
    <?php
    $capitales = array(
        "Bucarest" => "Roumanie",
        "Bruxelles" => "Belgique",
        "Oslo" => "Norvège",
        "Ottawa" => "Canada",
        "Paris" => "France",
        "Port-au-Prince" => "Haïti",
        "Port-d'Espagne" => "Trinité-et-Tobago",
        "Prague" => "République tchèque",
        "Rabat" => "Maroc",
        "Riga" => "Lettonie",
        "Rome" => "Italie",
        "San José" => "Costa Rica",
        "Santiago" => "Chili",
        "Sofia" => "Bulgarie",
        "Alger" => "Algérie",
        "Amsterdam" => "Pays-Bas",
        "Andorre-la-Vieille" => "Andorre",
        "Asuncion" => "Paraguay",
        "Athènes" => "Grèce",
        "Bagdad" => "Irak",
        "Bamako" => "Mali",
        "Berlin" => "Allemagne",
        "Bogota" => "Colombie",
        "Brasilia" => "Brésil",
        "Bratislava" => "Slovaquie",
        "Varsovie" => "Pologne",
        "Budapest" => "Hongrie",
        "Le Caire" => "Egypte",
        "Canberra" => "Australie",
        "Caracas" => "Venezuela",
        "Jakarta" => "Indonésie",
        "Kiev" => "Ukraine",
        "Kigali" => "Rwanda",
        "Kingston" => "Jamaïque",
        "Lima" => "Pérou",
        "Londres" => "Royaume-Uni",
        "Madrid" => "Espagne",
        "Malé" => "Maldives",
        "Mexico" => "Mexique",
        "Minsk" => "Biélorussie",
        "Moscou" => "Russie",
        "Nairobi" => "Kenya",
        "New Delhi" => "Inde",
        "Stockholm" => "Suède",
        "Téhéran" => "Iran",
        "Tokyo" => "Japon",
        "Tunis" => "Tunisie",
        "Copenhague" => "Danemark",
        "Dakar" => "Sénégal",
        "Damas" => "Syrie",
        "Dublin" => "Irlande",
        "Erevan" => "Arménie",
        "La Havane" => "Cuba",
        "Helsinki" => "Finlande",
        "Islamabad" => "Pakistan",
        "Vienne" => "Autriche",
        "Vilnius" => "Lituanie",
        "Zagreb" => "Croatie"
    );
    ?>
    <table class="table table-dark w-25 table-striped-columns">
        <tr>
            <th>Capitales</th>
            <th>Pays</th>
        </tr>
        <!--ksort($capitales) est utilisée pour trier le tableau $capitales par ordre alphabétique.-->
        <?php ksort($capitales);
        //La boucle foreach parcourt le tableau $capitales trié et récupère chaque clé (le nom de la capitale) dans la variable $nomcapi 
        //et chaque valeur (le nom du pays) dans la variable $pays.
        foreach ($capitales as $nomcapi => $pays) { ?>
            <tr>
                <!--Affiche le nom de la capitale dans un (<td>) dans la première colonne du tableau.-->
                <td><?php echo $nomcapi; ?></td>
                <!--Affiche le nom des pays dans un (<td>) dans la deuxième colonne du tableau.-->
                <td><?php echo $pays; ?></td>
            </tr>
        <?php } ?>
    </table>
    <br>
    <br>


    <h3>Liste des pays et de leur capitales par ordre alphabétique</h3>
    <table class="table table-primary w-25 table-striped-columns">
        <tr>
            <th>Pays</th>
            <th>Capitales</th>
        </tr>
        <!--Inverse les clés et valeurs du tableau $capitales, du coup les pays deviennent les clés 
        et inversement les capitales deviennent les valeurs puis triés par ordrealphabétique -->
        <?php $capitales = array_flip($capitales);
        ksort($capitales);
        //Parcourt le tableau $capitales trié et récupère chaque clé (le nom du pays) 
        //dans la variable $pays et chaque valeur (le nom de la capitale) dans la variable $nomcapi.
        foreach ($capitales as $pays => $nomcapi) { ?>
            <tr>
                <td><?php echo $pays; ?></td>
                <td><?php echo $nomcapi; ?></td>



            </tr>

        <?php } ?>
    </table>
    <br>
    <br>


    <h3>Nombre de pays</h3>
    <?php count($capitales);
    echo "Il y a \n";
    echo count($capitales);
    echo "\n capitales.";
    ?>
    <br>
    <br>


    <h3>Liste des capitales et de leur pays mais les capitales commencent par B ont était supprimé ! </h3>
    <table class="table table-dark w-25 table-striped-columns">
        <tr>
            <th>Pays</th>
            <th>Capitales</th>
        </tr>
        <?php $capitales = array_flip($capitales);
        ksort($capitales);
        array_splice($capitales, 5, 9);
        foreach ($capitales as $nomcapi => $pays) { ?>
            <tr>
                <td><?php echo $nomcapi; ?></td>
                <td><?php echo $pays; ?></td>



            </tr>

        <?php } ?>
    </table>
    <br><br>

    <!--///Exercice 3///-->
    <h3>Liste des régions par ordre alphabétique avec leur départements sous forme de tableau.</h3>

    <?php
    $departements = array(
        "Hauts-de-France" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
        "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
        "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
        "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
    );
    ?>
    <table class="table table-secondary w-25 table-striped-columns">
        <?php
        ksort($departements);

        echo '<tr><th>Région</th><th>Départements</th></tr>';

        foreach ($departements as $region => $deps) {
            echo '<tr>';
            echo '<td>' . $region . '</td>';
            echo '<td>' . implode(', ', $deps) . '</td>';
            echo '</tr>';
        }
        ?>

    </table>
    <br>
    <br>


    <h3>Liste des régions avec leur nombre de départements.</h3>

    <table class="table table-danger w-25 table-striped-columns">
        <?php


        echo '<tr><th>Région</th><th>Départements</th></tr>';

        foreach ($departements as $region => $deps) {
            $de = array_count_values($deps);
            echo '<tr>';
            echo '<td>' . $region . '</td>';
            echo '<td>' . count($deps) . '</td>';
            echo '</tr>';
        }
        ?>

    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>