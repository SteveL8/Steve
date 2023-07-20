<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Commande</title>
</head>

<body>
    <?php
    require("header.php")
    ?>
    <div class="container d-flex justify-content-center  align-items-center card border-dark rounded-4 mt-5" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-sm-4">
                <img src="img/pizza-margherita.jpg" class="img-fluid rounded-start mt-4" alt="pizza-margarita" title="pizza-margarita">
            </div>
            <div class="col-sm-8">
                <div class="card-body">
                    <h5 class="card-title">Pizza Margarita</h5>
                    <p class="card-text">Pâtes à pizza 400 g, Purée de tomate 6 cuillère, Mozzarella de bufflone 250 g,
                        Basilic frais quelques feuilles,
                        Hule d'olive 5cuillère à soupe, Sel, Poivre </p>
                    <div class="input-group">
                        <span class="input-group-text">Quantité</span>
                        <input type="number" class="form-control" value="1" min="1" max="20">
                    </div>
                </div>
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
            <div class="col-lg-12 col-md-12 col-sm-12 mt-4">
                <label  class="form-label"><span style="color: red">* </span>Nom et Prenom</label>
                <input type="text" name="nomEtPrenom" class="form-control h-50">
                <small class="ms-2"></small>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mt-4">
                <label  class=" form-label"><span style="color: red">* </span>Email</label>
                <input type="email" name="mail" class="form-control h-50">
                <small class="ms-2"></small>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mt-4 mt-4">
                <label  class="form-label"><span style="color: red">* </span>Téléphone</label>
                <input type="text" name="tel" class="form-control h-50">
                <small class="ms-2"></small>
            </div>
            <div class="col mb-5 ">
                <label class="form-label mt-4"><span style="color: red">* </span>Votre
                    adresse</label>
                <textarea class="form-control  " name="adresse" placeholder="Votre adresse" style="height: 150px"></textarea>
                <small class="ms-2"></small>
            </div>
            <div class="row">
                <div class="col position-relative mb-5">
                    <button type="submit" class="btn btn-outline-secondary position-absolute end-0  mt-1" id="envoyer" value="formcontact">Envoyer</button>
                </div>
            </div>
        </form>
    </div>
    <?php
    require("footer.php")
    ?>
    <script src="js/commande.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>