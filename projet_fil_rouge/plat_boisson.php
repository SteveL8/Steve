<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Boisson</title>
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
        <a href="evian_description.php">
        <img src="img/evian.jpg" class="img-fluid rounded-4 pb-1 object-fit-cover ms-5 cat" alt="eau_evian" title="eau_evian">
        </a>
        <div class="ms-5">
          <p><a href="evian_description.php" class="link-danger link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover fw-bold h5">Evian</a></p>
          <div>Prix : 1 €</div><label>Quantité: </label>
          <select id="qb" name="q">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
          </select>
          <button type="button" class="add-to-cart btn btn-outline-secondary" data-id="cheese" data-name="Cheeseburger" data-price="1" data-weight="97" data-url="">Ajouter au panier</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
        <a href="coca_description.php">
        <img src="img/Coca-Cola.jpg" class="img-fluid rounded-4 pb-1 ms-5 object-fit-cover cat" alt="coca-cola" title="coca-cola">
        </a>
        <div class="ms-5">
          <p><a href="coca_description.php" class="link-danger link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover fw-bold h5">Coca cola</a></p>
          <div>Prix : 1,50 €</div><label>Quantité: </label>
          <select id="qb2" name="q">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
          </select>
          <button type="button" class="add-to-cart btn btn-outline-secondary" data-id="fish" data-name="FishBurger" data-price="1,50" data-weight="97" data-url="">Ajouter au panier</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
        <a href="sprite_descrition.php">
        <img src="img/Sprite.jpg" class="img-fluid rounded pb-1 ms-5 object-fit-cover  cat" alt="sprite" title="sprite">
        </a>
        <div class="ms-5">
          <p><a href="sprite_descrition.php" class="link-danger link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover fw-bold h5">Sprite</a></p>
          <div class="link-danger fw-bold">Sprite<br></div>
          <div>Prix : 1,50 €</div><label>Quantité: </label>
          <select id="qb3" name="q">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
          </select>
          <button type="button" class="add-to-cart btn btn-outline-secondary" data-id="bacon" data-name="Burger_Bacon" data-price="1,50" data-weight="97" data-url="">Ajouter au panier</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
        <a href="icetea_description.php">
        <img src="img/ice-tea.jpg" class="img-fluid rounded pb-1 ms-5 object-fit-cover cat" alt="ice_tea" title="ice_tea">
        </a>
        <div class="ms-5 mb-5">
          <p><a href="icetea_description.php" class="link-danger link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover fw-bold h5">Ice tea</a></p>
          <div>Prix : 1,50 €</div><label>Quantité: </label>
          <select id="qb4" name="q">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
          </select>
          <button type="button" class="add-to-cart btn btn-outline-secondary" data-id="poulet" data-name="Burger-poulet" data-price="1,50" data-weight="97" data-url="">Ajouter au panier</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
        <a href="oasis_decription.php">
        <img src="img/oasis.jpg" class="img-fluid rounded pb-1 ms-5 object-fit-cover cat" alt="oasis" title="oasis">
        </a>
        <div class="ms-5 mb-5">
          <p><a href="oasis_decription.php" class="link-danger link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover fw-bold h5">Oasis</a></p>
          <div>Prix : 1,50 €</div><label>Quantité: </label>
          <select id="qb5" name="q">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
          </select>
          <button type="button" class="add-to-cart btn btn-outline-secondary" data-id="vegies" data-name="Burger_végétarien" data-price="1,50" data-weight="97" data-url="">Ajouter au panier</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
        <a href="tropico_description.php">
        <img src="img/Tropico.jpg" class="img-fluid rounded pb-1 ms-5 object-fit-cover  cat" alt="tropico" title="tropico">
        </a>
        <div class="ms-5 mb-5">
          <p><a href="tropico_description.php" class="link-danger link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover fw-bold h5">Tropico</a></p>
          <div>Prix : 1,50 €</div><label>Quantité: </label>
          <select id="qb6" name="q">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
          </select>
          <button type="button" class="add-to-cart btn btn-outline-secondary" data-id="patesfromages" data-name="Pâtes_aux_3_fromages" data-price="1,50" data-weight="97" data-url="">Ajouter au panier</button>
        </div>
      </div>
    </div>
    <div class="container-fluid d-none d-lg-block">
      <div class="row text-center">
        <div class="col-6">
          <a href="plat_pizza.php"><button class="btn btn-outline-secondary mt-5 bouton" id="precedent">Précedent</button></a>
        </div>
        <div class="col-6">
          <a href="plat_dessert.php"><button class="btn btn-outline-secondary mt-5  bouton" id="suivant">Suivant</button></a>
        </div>
      </div>
    </div>
  </div>
  <?php
  require("footer.php")
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>