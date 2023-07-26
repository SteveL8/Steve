<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Dessert</title>
</head>

<body>
  <?php
  require("header.php")
  ?>
  <div class="row">
    <div class="col">
      <img src="img/twitter_header_photo_2.png" class="img-fluid object-fit-cover" alt="Banniere" title="Banniere" id="banniere">
    </div>
  </div>
  <div class="container img-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
        <img src="img/mousse-chocolat-recette.jpg" class="img-fluid rounded-4 pb-1 object-fit-cover ms-5 cat" alt="mousse-chocolat" title="mousse-chocolat">
        <div class="ms-5">
        <p><a href="#" class="link-danger link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover fw-bold h5">Mousse au chocolat</a></p>
          <div>Prix : 4 €</div><label>Quantité: </label>
          <select id="qz" name="q">
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
          <button type="button" class="add-to-cart btn btn-outline-secondary" data-id="mousse" data-name="mousse-chocolat" data-price="4" data-weight="97" data-url="">Ajouter au panier</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
        <img src="img/tarte-au-citron.jpeg" class="img-fluid rounded-4 pb-1 ms-5 object-fit-cover cat" alt="tarte-au-citron" title="tarte-au-citron">
        <div class="ms-5">
        <p><a href="#" class="link-danger link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover fw-bold h5">Tarte au citron</a></p>
          <div>Prix : 4 €</div><label>Quantité: </label>
          <select id="qz2" name="q">
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
          <button type="button" class="add-to-cart btn btn-outline-secondary" data-id="citron" data-name="tarte-au-citron" data-price="4" data-weight="97" data-url="">Ajouter au panier</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
        <img src="img/Tiramisu.jpg" class="img-fluid rounded pb-1 ms-5 object-fit-cover  cat" alt="tiramisu" title="tiramisu">
        <div class="ms-5">
        <p><a href="#" class="link-danger link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover fw-bold h5">Tiramisu</a></p>
          <div>Prix : 4 €</div><label>Quantité: </label>
          <select id="qz3" name="q">
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
          <button type="button" class="add-to-cart btn btn-outline-secondary" data-id="tira" data-name="tiramisu" data-price="4" data-weight="97" data-url="">Ajouter au panier</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
        <img src="img/Paris-Bre.JPG" class="img-fluid rounded pb-1 ms-5 object-fit-cover cat" alt="paris_brest" title="paris_brest">
        <div class="ms-5 mb-5">
        <p><a href="#" class="link-danger link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover fw-bold h5">Paris brest</a></p>
          <div>Prix : 4 €</div><label>Quantité: </label>
          <select id="qz4" name="q">
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
          <button type="button" class="add-to-cart btn btn-outline-secondary" data-id="paris" data-name="paris_brest" data-price="4" data-weight="97" data-url="">Ajouter au panier</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
        <img src="img/millefeui.avif" class="img-fluid rounded pb-1 ms-5 object-fit-cover cat" alt="millefeuille" title="millefeuille">
        <div class="ms-5 mb-5">
        <p><a href="#" class="link-danger link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover fw-bold h5">Millefeuille</a></p>
          <div>Prix : 4 €</div><label>Quantité: </label>
          <select id="qz5" name="q">
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
          <button type="button" class="add-to-cart btn btn-outline-secondary" data-id="mille" data-name="millefeuille" data-price="4" data-weight="97" data-url="">Ajouter au panier</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
        <img src="img/creme-brulee-1200.jpg" class="img-fluid rounded pb-1 ms-5 object-fit-cover  cat" alt="creme-brulee" title="creme-brulee">
        <div class="ms-5 mb-5">
        <p><a href="#" class="link-danger link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover fw-bold h5">Crème brulée</a></p>
          <div>Prix : 4 €</div><label>Quantité: </label>
          <select id="qz6" name="q">
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
          <button type="button" class="add-to-cart btn btn-outline-secondary" data-id="creme" data-name="creme-brulee" data-price="4" data-weight="97" data-url="">Ajouter au panier</button>
        </div>
      </div>
    </div>
    <div class="container-fluid d-none d-lg-block">
      <div class="row text-center">
        <div class="col-6">
          <a href="plat_boisson.php"><button class="btn btn-outline-secondary mt-5 bouton" id="precedent">Précedent</button></a>
        </div>
        <div class="col-6">
          <a href="plat_asainfood.php"><button class="btn btn-outline-secondary mt-5  bouton" id="suivant">Suivant</button></a>
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