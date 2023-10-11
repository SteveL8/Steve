<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Contact</title>
</head>

<body>
    <?php
    //Utilisation de 'foreach' pour parcourir les valeur du tableau '$_POST'
    foreach ($_POST as $key => $value) {
        //'{$key}' crée des variables dynamiques en utilisant le nom de chaque clé du tableau
        ${$key} = $value;
    }
    //vérifier si la variable $envoyer est déclarée
    if (isset($envoyer)) {
        //Création d'un nouveau fichier nommé avec la date et heure de sa création
        //'a+' Crée un nouveau fichier si le fichier n'existe pas 
        $fp = fopen((date("Y-m-d-H-i-s") . ".txt"), "a+");
        //Données enregistrer dans le fichier
        fputs($fp, $nom . "," . $prenom . "," . $mail . "," . $tel . "," . $demande); 
    }
    ?>
    <?php
    session_start();
    require('connexion_db.php');
    require("header.php");
    require('DAO.php');
    $_SESSION['panier'];
    ?>
    <div class="container-">
        <div class="row">
            <div class="col">
                <img src="img/twitter_header_photo_2.png" class="img-fluid object-fit-cover" alt="Banniere" title="Banniere" id="banniere">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-4 h5">
                <p><span style="color: red;">* </span>Ces champs sont obligatoire </p>
            </div>
        </div>
        <form class="row" method="POST" id="formcontact">
            <div class="col-lg-6 col-md-6 col-sm-12 mt-4">
                <label class="form-label"><span style="color: red">* </span>Nom</label>
                <input type="text" name="nom" class="form-control h-50">
                <small class="ms-2"></small>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mt-4">
                <label class=" form-label"><span style="color: red">* </span>Prénom</label>
                <input type="text" name="prenom" class="form-control h-50">
                <small class="ms-2"></small>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mt-4">
                <label class=" form-label"><span style="color: red">* </span>Email</label>
                <input type="email" name="mail" class="form-control h-50">
                <small class="ms-2"></small>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mt-4 mt-4">
                <label class="form-label"><span style="color: red">* </span>Téléphone</label>
                <input type="text" name="tel" class="form-control h-50">
                <small class="ms-2"></small>
            </div>
            <div class="col mb-5 ">
                <label class="form-label mt-4"><span style="color: red">* </span>Votre
                    demande</label>
                <textarea class="form-control  " name="demande" placeholder="Votre demande" style="height: 150px"></textarea>
                <small class="ms-2"></small>
            </div>
            <div class="row">
                <div class="col position-relative mb-5">
                    <button type="submit" class="btn btn-outline-secondary position-absolute end-0  mt-1" name="envoyer" id="envoyer" value="formcontact">Envoyer</button>
                </div>
            </div>
        </form>
    </div>
    <?php
    require("footer.php")
    ?>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>