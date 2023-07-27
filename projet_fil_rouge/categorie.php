<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Catégorie</title>
</head>

<body>
  <?php
  require("header.php")
  ?>
  <div class="container-">
    <div class="row">
      <div class="col">
        <img src="img/twitter_header_photo_2.png" class="img-fluid object-fit-cover" alt="Banniere" title="Banniere" id="banniere">
      </div>
    </div>
  </div>
  <div class="container img-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
        <a href="plat_asainfood.php"><img src="img/Recette-Poulet-Teriyaki.jpg" class="img-fluid rounded pb-1 ms-5 cat object-fit-cover" alt="Japonais" title="Japonais"></a>
        <p><a href="plat_asainfood.php" class="link-danger link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover ms-5 pb-5 h5">Plat Japonais</a></p>

      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
        <a href="plat_pasta.php"><img src="img/Pâtesricotta.jpeg" class="img-fluid rounded pb-1 ms-5 cat o" alt="pasta" title="pasta"></a>
        <p><a href="plat_pasta.php" class="link-danger link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover ms-5 pb-5 h5">Carte des pâtes  </a></p>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
        <a href="plat_burger.php"><img src="img/cheeseb.jpg" class="img-fluid rounded pb-1 ms-5 cat object-fit-cover" alt="burger" title="burger"></a>
        <p><a href="plat_burger.php" class="link-danger link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover ms-5 pb-5 h5">Carte des burgers</a></p>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
        <a href="plat_pizza.php"><img src="img/pizza_cat.jpg" class="img-fluid rounded pb-1 ms-5 cat" alt="pizza" title="pizza"></a>
        <p><a href="plat_pizza.php" class="link-danger link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover ms-5 pb-5 h5">Carte des pizzas</a></p>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt-5 mb-5">
        <a href="plat_boisson.php"><img src="img/evian.jpg" class="img-fluid rounded pb-1 ms-5 cat object-fit-cover" alt="Boissons" title="Boissons"></a>
        <p><a href="plat_boisson.php" class="link-danger link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover ms-5 pb-5 h5">Boisson</a></p>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
        <a href="plat_dessert.php"><img src="img/mousse-chocolat-recette.jpg" class="img-fluid rounded pb-1 ms-5 cat object-fit-cover" alt="Dessert" title="Dessert"></a>
        <p><a href="plat_dessert.php" class="link-danger link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover ms-5 pb-5 h5">Dessert</a></p>
      </div>
    </div>
  </div>
    <!--<div class="container-fluid d-none d-lg-block">
    <div class="row text-center">
        <div class="col-6">
            <a href="index.html"><button  class="btn btn-outline-secondary bouton" id="precedent">Précedent</button></a>
        </div>
        <div class="col-6">
            <a href="plat.html"><button class="btn btn-outline-secondary  bouton" id="suivant">Suivant</button></a>
        </div>
    </div>
   </div>-->
    <?php
    require("footer.php")
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>