<?php
    //Connecxion à la base de données.
    $db = new PDO('mysql:host=localhost;charset=utf8;dbname=record', 'admin', 'steve1234');
    //'setAtribute' ES utilisée pour definir un attribut a la connexion ici 'PDO::ERRMODE_EXECPTION' fait une exception si une erreur est
    //detecter a la connexion attibuant quand même la connexion.
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Préparation d'une requête SQL, seclectionne tous les champ de la table 'disc' mais 'disc_id' est fixé sur un ID présent dans la colonne 'disc_id'
    $requete = $db->prepare("SELECT * FROM disc WHERE disc_id= 10");
    $requete->execute();
    //Récupère le premier résultat de la requête grâce à 'fetch' puis l'argument 'PDO::FETCH_OBJ' fait en sorte que les résultats soit retounés sous forme d'objet.
    $disc = $requete->fetch(PDO::FETCH_OBJ)
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Test PDO</title>
</head>
<html>
<body>
    <?php if ($disc):?>
        <p>disc N° <?= $disc->disc_id ?></p>
        <p>Disc name <?= $disc->disc_title ?></p>
        <p>Disc year <?= $disc->disc_year ?></p>
    <?php else: ?>
        <p>Aucun disque trouvé, mauvaise ID</p>
    <?php endif; ?>
</body>
</html>