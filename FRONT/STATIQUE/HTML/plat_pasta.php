<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Plat Pâtes</title>
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
        <img src="img/Pâtesricotta.jpeg" class="img-fluid rounded-4 pb-1  ms-5 cat" alt="Pâtes_ricotta" title="Pâtes_ricotta" id="patesricotta">
        <div class="ms-5">
          <div class="link-danger fw-bold">Pâtes ricotta<br></div>
          <div>Prix : 19,90 €</div><label>Quantité: </label>
          <select id="qa" name="q">
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
          <button type="button" class="add-to-cart btn btn-outline-secondary" data-id="patesricotta" data-name="Pâtes_ricotta" data-price="29,00" data-weight="97" data-url="">Ajouter au panier</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
        <img src="img/penne-a-l-arrabiata.webp" class="img-fluid rounded-4 pb-1 ms-5 object-fit-cover cat" alt="Penne_all'arrabbiata" title="Penne_all'arrabbiata" id="penne">
        <div class="ms-5">
          <div class="link-danger fw-bold">Penne all'arrabbiata<br></div>
          <div>Prix : 21,90 €</div><label>Quantité: </label>
          <select id="qa2" name="q">
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
          <button type="button" class="add-to-cart btn btn-outline-secondary" data-id="penne" data-name="Penne_all'arrabbiata" data-price="29,00" data-weight="97" data-url="">Ajouter au panier</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
        <img src="img/Pates-au-pesto.jpg" class="img-fluid rounded pb-1 ms-5 object-fit-cover  cat" alt="Pâtes_au_pesto" title="Pâtes_au_pesto" id="pesto">
        <div class="ms-5">
          <div class="link-danger fw-bold">Pâtes au pesto<br></div>
          <div>Prix : 18,90 €</div><label>Quantité: </label>
          <select id="qa3" name="q">
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
          <button type="button" class="add-to-cart btn btn-outline-secondary" data-id="pesto" data-name="Pâtes_au_pesto" data-price="29,00" data-weight="97" data-url="">Ajouter au panier</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
        <img src="img/pates-poulet-bechamel-et-champignons.jpg" class="img-fluid rounded pb-1 ms-5 object-fit-cover cat" alt="Pâtes_au_poulet,_béchamel_et_champignons" title="Pâtes_au_poulet,_béchamel_et_champignons" id="patesapbec">
        <div class="ms-5 mb-5">
          <div class="link-danger fw-bold">Pâtes au poulet, béchamel et champignons<br></div>
          <div>Prix : 21,90 €</div><label>Quantité: </label>
          <select id="qa4" name="q">
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
          <button type="button" class="add-to-cart btn btn-outline-secondary" data-id="patesapbec" data-name="Pâtes_au_poulet,_béchamel_et_champignons" data-price="29,00" data-weight="97" data-url="">Ajouter au panier</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
        <img src="img/pcp.jpg" class="img-fluid rounded pb-1 ms-5 object-fit-cover cat" alt="Pâtes aux courgettes_et_pancetta" title="Pâtes aux courgettes_et_pancetta " id="patesacp">
        <div class="ms-5 mb-5">
          <div class="link-danger fw-bold">Pâtes aux cougettes et pancetta<br></div>
          <div>Prix : 22,90 €</div><label>Quantité: </label>
          <select id="qa5" name="q">
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
          <button type="button" class="add-to-cart btn btn-outline-secondary" data-id="patesacp" data-name="Pâtes aux courgettes_et_pancetta" data-price="29,00" data-weight="97" data-url="">Ajouter au panier</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
        <img src="img/pate_au_3_fromton.jpg" class="img-fluid rounded pb-1 ms-5 object-fit-cover  cat" alt="Pâtes_aux_3_fromages" title="Pâtes_aux_3_fromages" id="patesfromages">
        <div class="ms-5 mb-5">
          <div class="link-danger fw-bold">Pâtes aux 3 fromages<br></div>
          <div>Prix : 19,90 €</div><label>Quantité: </label>
          <select id="qa6" name="q">
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
          <button type="button" class="add-to-cart btn btn-outline-secondary" data-id="patesfromages" data-name="Pâtes_aux_3_fromages" data-price="29,00" data-weight="97" data-url="">Ajouter au panier</button>
        </div>
      </div>
    </div>
    <div class="container-fluid d-none d-lg-block">
      <div class="row text-center">
        <div class="col-6">
          <a href="plat_asainfood.php"><button class="btn btn-outline-secondary mt-5 bouton" id="precedent">Précedent</button></a>
        </div>
        <div class="col-6">
          <a href="plat_burger.php"><button class="btn btn-outline-secondary mt-5  bouton" id="suivant">Suivant</button></a>
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