<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Pizza chèvre miel description</title>
</head>

<body>
    <?php
    require("header_et_footer/header.php")
    ?>
    <div class="container-">
        <div class="row">
            <div class="col mb-5">
                <img src="img/twitter_header_photo_2.png" class="img-fluid object-fit-cover" alt="Banniere" title="Banniere" id="banniere">
            </div>
        </div>
    </div>
    <div class="container d-flex justify-content-center  align-items-center card border-dark rounded-4 mt-3 mb-5" style="max-width: 1600px;">
        <div class="row g-0">
            <div class="col-sm-4">
                <img src="img/cm.jpg" class="img-fluid rounded-4 my-3" alt="pizza-margarita" title="pizza-margarita" style="width: 1000px;">
            </div>
            <div class="col-sm-8">
                <div class="card-body">
                    <h5 class="card-title">Pizza chèvre miel</h5>
                    <p class="card-text">Pâtes à pizza 1, Buche de chèvre 1, Gruyère râpé 100 g, Crème liquide 1 brique, Miel.<br>
                        Prix: 12.50 € </p>
                    <div class="input-group">
                        <span class="input-group-text">Quantité</span>
                        <input type="number" class="form-control" value="1" min="1" max="20">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid d-none d-lg-block">
      <div class="row text-center">
        <div class="col-6">
          <a href="commande.php"><button class="btn btn-outline-secondary  btn-lg mt-1" id="precedent">Passer commmande</button></a>
        </div>
        <div class="col-6">
          <a href="panier.php"><button class="btn btn-outline-secondary btn-lg  mt-1" id="suivant">Ajouter au panier</button></a>
        </div>
      </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 position-relative mt-5">
                <div class="position-absolute top-100 start-50 translate-middle-x">
                    <?php
                    require("header_et_footer/footer.php")
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>