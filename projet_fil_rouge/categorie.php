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
  session_start();
  require('connexion_db.php');
  require("header.php");
  require('DAO.php');
  $_SESSION['panier'];
  // Obtenir la liste des catégories
  $categories = get_categories();
  ?>
   <div class="container-">
    <div class="row">
      <div class="col mb-4">
        <img src="img/twitter_header_photo_2.png" class="img-fluid object-fit-cover" alt="Banniere" title="Banniere" id="banniere">
      </div>
    </div>
  </div>
  <ul class="list-unstyled d-flex flex-wrap justify-content-center">
    <?php
    //récupère les categories les plus populaires 
    $popularCategories = getIndexCategories();
    //Vérifie si les catégories ont été récupérées
    if ($popularCategories) :
      foreach ($popularCategories as $category) :
    ?>
        <li class="col-md-4 mb-4">
          <div class="text-center">
            <img src="<?= $category['image'] ?>" alt="<?= $category['libelle'] ?>" width="325" height="325" class=" object-fit-cover">
          </div>
          <div class="text-center mt-2">
            <a href="<?= $category['lien'] ?>" style="color: #970747;" class="text-decoration-none font-weight-bold">
              <strong><?= $category['libelle'] ?></strong>
            </a>
          </div>
        </li>
    <?php
      endforeach;
    else :
      echo "Erreur lors de la récupération des catégories.";
    endif;
    ?>
  </ul>

  <?php
  require("footer.php")
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>
