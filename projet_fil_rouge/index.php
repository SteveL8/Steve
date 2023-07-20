<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Accueil</title>
</head>

<body>
  <?php
  require("header.php")
  ?>
  <div class="parallax">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <video src="video/plats.mp4" class="img-fluid object-fit-cover" id="vid" autoplay loop muted></video>
        </div>
      </div>
    </div>

    <div class="container img-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12 mt-4   ">
          <a href="plat_asainfood.php"><img src="img/Recette-Poulet-Teriyaki.jpg" class="img-fluid rounded pb-5 ms-5 object-fit-cover cat" alt="Japonais" title="Japonais"></a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
          <a href="plat_pasta.php"><img src="img/Pâtesricotta.jpeg" class="img-fluid rounded pb-5 ms-5 cat" alt="pasta" title="pasta"></a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
          <a href="plat_burger.php"><img src="img/cheeseb.jpg" class="img-fluid rounded pb-5 ms-5 object-fit-cover cat" alt="burger" title="burger"></a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 ">
          <a href="plat_pizza.php"><img src="img/pizza_cat.jpg" class="img-fluid rounded pb-5 ms-5 cat" alt="pizza" title="pizza"></a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <a href="plat_boisson.php"><img src="img/evian.jpg" class="img-fluid rounded pb-5 ms-5 cat object-fit-cover" alt="Boissons" title="Boissons"></a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 ">
          <a href="plat_dessert.php"><img src="img/mousse-chocolat-recette.jpg" class="img-fluid rounded pb-5 ms-5 cat object-fit-cover" alt="mousse_au_chocolat" title="mousse_au_chocolat"></a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 my-5">
          <img src="img/pizza-margherita.jpg" class="img-fluid rounded pb-5 ms-5 plat" alt="pizza_margherita" title="pizza_margherita">
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 my-5">
          <img src="img/cheeseb.jpg" class="img-fluid rounded pb-5 ms-5 plat object-fit-cover" alt="cheesburger" title="cheesburger">
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 my-5">
          <img src="img/maki-sushi.jpeg" class="img-fluid rounded pb-5 ms-5 plat object-fit-cover" alt="Maki" title="Maki">
        </div>
      </div>
    </div>
    <?php
    require("footer.php")
    ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>