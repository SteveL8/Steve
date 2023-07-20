<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Mon script php</title>
</head>

<body>
    <?php
    $nom = $prenom = $email = $tel = $demande = "";



    function securisation($secu)
    {
        $secu = trim($secu);
        $secu = stripslashes($secu);
        $secu = strip_tags($secu);
        return $secu;
    }

    $nom = securisation($_REQUEST['nom']);
    $prenom = securisation($_REQUEST['prenom']);
    $email = securisation($_REQUEST['email']);
    $tel = securisation($_REQUEST['tel']);
    $demande = securisation($_REQUEST['demande']);
    ?>

    <table class="table table-danger table-striped-columns">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Demande</th>
        </tr>
        <tr>
            <td><?php echo securisation($_REQUEST["nom"]); ?></td>
            <td><?php echo securisation($_REQUEST["prenom"]); ?></td>
            <td><?php echo securisation($_REQUEST["email"]); ?></td>
            <td><?php echo securisation($_REQUEST["tel"]); ?></td>
            <td><?php echo securisation($_REQUEST["demande"]); ?></td>
        </tr>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>