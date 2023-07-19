<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Les fichier php</title>
</head>

<body>

    <!--//////////Exercice 1//////////-->
    <h3>Lecture d'un fichier</h3>

    <?php
    // Lire le contenu du fichier dans un tableau
    $liens = file("liens.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    // Vérifier si des liens ont été lus
    if ($liens !== false) {
        // Construire la liste de liens hypertextes
        echo "<ul>";
        foreach ($liens as $lien) {
            echo "<li><a href=\"$lien\">$lien</a></li>";
        }
        echo "</ul>";
    } else {
        echo "Erreur lors de la lecture du fichier.";
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    ?>


    <!--//////////Exercice 2//////////-->

    <h3>Récupération d'un fichier distant</h3>


    <table class=" table table-hover table table-dark w-100 table-striped-columns">
        <?php
        // Récupérer le contenu du fichier CSV.Le  contenu est stocké dans la variable '$fileContent' sous forme d'un tableau.
        $fileUrl = 'https://ncode.amorce.org/customers.csv';
        $fileContent = file($fileUrl);

        //Tableau(en-tête) HTML représenté par $table.

        $table .= '<thead><tr>';
        $table .= '<th>Surname</th>';
        $table .= '<th>Firstname</th>';
        $table .= '<th>Email</th>';
        $table .= '<th>Phone</th>';
        $table .= '<th>City</th>';
        $table .= '<th>State</th>';
        $table .= '</tr></thead>';
        $table .= '<tbody>';

        // Parcourir chaque ligne du fichier CSV
        foreach ($fileContent as $line) {
            // Découper la ligne en utilisant 'explode' avec la virgule comme séparateur
            $data = explode(',', $line);

            // Ajout d'une nouvelle ligne 
            $table .= '<tr>';
            $table .= '<td>' . $data[0] . '</td>'; // Surname
            $table .= '<td>' . $data[1] . '</td>'; // Firstname
            $table .= '<td>' . $data[2] . '</td>'; // Email
            $table .= '<td>' . $data[3] . '</td>'; // Phone
            $table .= '<td>' . $data[4] . '</td>'; // City
            $table .= '<td>' . $data[5] . '</td>'; // State
            $table .= '</tr>';
        }

        $table .= "</tbody>";

        echo $table;
        ?>
    </table>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>