<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Plat Burger</title>
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
        <img src="img/cheeseb.jpg" class="img-fluid rounded-4 pb-1  ms-5 cat" alt="Cheeseburger" title="Cheeseburger"  id="cheese">
        <div class="ms-5">
          <div class="link-danger fw-bold">Cheeseburger<br></div><div>Prix : 10,90 €</div><label>Quantité: </label>
          <select id="qu" name="q">
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
          <button type="button" class="add-to-cart btn btn-outline-secondary" data-id="cheese" data-name="Cheeseburger" data-price="29,00" data-weight="97" data-url="">Ajouter au panier</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
        <img src="img/Fishburger.jpg" class="img-fluid rounded-4 pb-1 ms-5 object-fit-cover cat" alt="FishBurger" title="FishBurger" id="fish">
        <div class="ms-5">
          <div class="link-danger fw-bold">FishBurger<br></div><div>Prix : 10,90 €</div><label>Quantité: </label>
          <select id="qu2" name="q">
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
          <button type="button" class="add-to-cart btn btn-outline-secondary" data-id="fish" data-name="FishBurger" data-price="29,00" data-weight="97" data-url="">Ajouter au panier</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
        <img src="img/burger_bacon.jpg" class="img-fluid rounded pb-1 ms-5 object-fit-cover  cat" alt="Burger_Bacon" title="Burger_Bacon" id="bacon">
        <div class="ms-5">
          <div class="link-danger fw-bold">Burger Bacon<br></div><div>Prix : 10,90 €</div><label>Quantité: </label>
          <select id="qu3" name="q">
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
          <button type="button" class="add-to-cart btn btn-outline-secondary" data-id="bacon" data-name="Burger_Bacon" data-price="29,00" data-weight="97" data-url="">Ajouter au panier</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
        <img src="img/burger-poulet-croustillant.jpg" class="img-fluid rounded pb-1 ms-5 object-fit-cover cat" alt="Burger-poulet" title="Burger-poulet"  id="poulet">
        <div class="ms-5 mb-5">
          <div class="link-danger fw-bold">Burger poulet<br></div><div>Prix : 10,90 €</div><label>Quantité: </label>
          <select id="qu4" name="q">
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
          <button type="button" class="add-to-cart btn btn-outline-secondary" data-id="poulet" data-name="Burger-poulet" data-price="29,00" data-weight="97" data-url="">Ajouter au panier</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
        <img src="img/burgers-vegetariens.jpg" class="img-fluid rounded pb-1 ms-5 object-fit-cover cat" alt="Burger_végétarien" title="burgers-vegetariens" id="vegies">
        <div class="ms-5 mb-5">
          <div class="link-danger fw-bold">Burger vegetariens<br></div><div>Prix : 10,90 €</div><label>Quantité: </label>
          <select id="qu5" name="q">
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
          <button type="button" class="add-to-cart btn btn-outline-secondary" data-id="vegies" data-name="Burger_végétarien" data-price="29,00" data-weight="97" data-url="">Ajouter au panier</button>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
        <img src="img/burger-au-poulet-et-avocat.jpeg" class="img-fluid rounded pb-1 ms-5 object-fit-cover  cat" alt="burger-au-poulet-et-avocat" title="burger-au-poulet-et-avocat" id="burger_avocats" >
        <div class="ms-5 mb-5">
          <div class="link-danger fw-bold">Burger au-poulet et avocat<br></div><div>Prix : 10,90 €</div><label>Quantité: </label>
          <select id="qu6" name="q">
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
          <a href="plat_pasta.php"><button class="btn btn-outline-secondary mt-5 bouton" id="precedent">Précedent</button></a>
        </div>
        <div class="col-6">
          <a href="plat_pizza.php"><button class="btn btn-outline-secondary mt-5  bouton" id="suivant">Suivant</button></a>
        </div>
      </div>
    </div>
    <?php
    require("footer.php")
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>