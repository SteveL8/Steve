<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Plat Japonais</title>
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
      <div class="col-lg-4 col-md-6 col-sm-12 mt-4 ">
        <a href="teriyaki_description.php">
        <img src="img/Recette-Poulet-Teriyaki.jpg" class="img-fluid rounded-4 pb-1 ms-5 object-fit-cover cat" alt="Poulet_Teriyaki" title="Poulet_Teriyaki" id="poulet">
        </a>
        <div class="ms-5">
          <p><a href="teriyaki_description.php" class="link-danger link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover fw-bold h5">Poulet teriyaki</a></p>
          <div>Prix : 29,00 €</div><label>Quantité: </label>
          <select id="qt" name="q">
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
          <button type="button" class="add-to-cart btn btn-outline-secondary" data-id="poulet" data-name="Poulet_Teriyaki" data-price="29,00" data-weight="97" data-url="">Ajouter au panier</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
        <a href="sushi_description.php">
        <img src="img/Sushi.jpeg" class="img-fluid rounded-4 pb-1 ms-5 object-fit-cover cat" alt="Sushi" title="Sushi" id="sushi">
        </a>
        <div class="ms-5">
          <p><a href="sushi_description.php" class="link-danger link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover fw-bold h5">Sushi</a></p>
          <div>Prix : 11,00 €</div><label>Quantité: </label>
          <select id="qt2" name="q">
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
          <button type="button" class="add-to-cart btn btn-outline-secondary" data-id="sushi" data-name="Sushi" data-price="11,00" data-weight="97" data-url="">Ajouter au panier</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
        <a href="ramen_description.php">
        <img src="img/Ramen.jpg" class="img-fluid rounded-4 pb-1 ms-5  cat" alt="Ramen" title="Ramen" id="ramen">
        </a>
        <div class="ms-5">
          <p><a href="ramen_description.php" class="link-danger link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover fw-bold h5">Ramen</a></p>
          <div>Prix : 24,00 €</div><label>Quantité: </label>
          <select id="qt3" name="q">
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
          <button type="button" class="add-to-cart btn btn-outline-secondary" data-id="ramen" data-name="Ramen" data-price="24,00" data-weight="97" data-url="">Ajouter au panier</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12  mt-5">
        <a href="maki_description.php">
        <img src="img/maki-sushi.jpeg" class="img-fluid rounded-4 pb-1 ms-5 object-fit-cover cat" alt="Maki" title="Maki" id="maki">
        </a>
        <div class="ms-5 mb-5">
          <p><a href="maki_description.php" class="link-danger link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover fw-bold h5">Maki</a></p>
          <div>Prix : 5,90 €</div><label>Quantité: </label>
          <select id="qt4" name="q">
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
          <button type="button" class="add-to-cart btn btn-outline-secondary" data-id="maki" data-name="Maki" data-price="5,90" data-weight="97" data-url="">Ajouter au panier</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
        <a href="soba_description.php">
        <img src="img/soba.jpg" class="img-fluid rounded-4 pb-1 ms-5 object-fit-cover cat" alt="Soba" title="Soba" id="soba">
        </a>
        <div class="ms-5 mb-5">
          <p><a href="soba_description.php" class="link-danger link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover fw-bold h5">Soba</a></p>
          <div>Prix : 18,00 €</div><label>Quantité: </label>
          <select id="qt5" name="q">
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
          <button type="button" class="add-to-cart btn btn-outline-secondary" data-id="soba" data-name="Soba" data-price="18,00" data-weight="97" data-url="">Ajouter au panier</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
        <a href="brochette_description.php">
        <img src="img/Brochette.webp" class="img-fluid rounded-4 pb-1 ms-5 object-fit-cover cat" alt="Brochette" title="Borchette" id="brochette">
        </a>
        <div class="ms-5 mb-5">
          <p><a href="brochette_description.php" class="link-danger link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover fw-bold h5">Brochette</a></p>
          <div>Prix : 9,90 €</div><label>Quantité: </label>
          <select id="qt6" name="q">
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
          <button type="button" class="add-to-cart btn btn-outline-secondary" data-id="brochette" data-name="Brochette" data-price="9,90" data-weight="97" data-url="">Ajouter au panier</button>
        </div>
      </div>
    </div>
    <div class="container-fluid d-none d-lg-block">
      <div class="row text-center">
        <div class="col-6">
          <a href="categorie.php"><button class="btn btn-outline-secondary bouton mt-5" id="precedent">Précedent</button></a>
        </div>
        <div class="col-6">
          <a href="plat_pasta.php"><button class="btn btn-outline-secondary  bouton mt-5" id="suivant">Suivant</button></a>
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