<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Plat Pizza</title>
</head>

<body>
<?php
  require('connexion_db.php');
  require("header.php");
  require_once('DAO.php');

  // Récupérez la liste des plats de cette catégorie
  $plats = getPlatsByCategory('Pizzas');

  // Vérifiez si des plats ont été récupérés
  if ($plats) {
    
      
  ?>
   <div class="container-">
    <div class="row">
      <div class="col mb-4">
        <img src="img/twitter_header_photo_2.png" class="img-fluid object-fit-cover" alt="Banniere" title="Banniere" id="banniere">
      </div>
    </div>
  </div>
      <div class="container mt-2 mb-5">
    <div class="row">
        <?php
        foreach ($plats as $plat) {
        ?>
        <div class="col-md-4 mt-1">
            <div class="card h-100 ">
                <img src="<?= $plat['image'] ?>" alt="<?= $plat['libelle'] ?>" width="325" height="325" class="card-img-top object-fit-cover">
                <div class="card-body">
                    <h5 class="card-title"><?= $plat['libelle'] ?></h5>
                    <p class="card-text"><?= $plat['description'] ?></p>
                    <p class="card-text">Prix : <?= $plat['prix'] ?> €</p>
                </div>
                <a href="#" class="btn btn-primary" style="width: 150px;">Ajouter au panier</a>
            </div>
            
        </div>
        <?php
        }
        ?>
    </div>
</div>

  <?php
    }
   else {
    echo "Aucun plat trouvé dans cette catégorie.";
  }
  ?>
    <?php
    require("footer.php")
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>