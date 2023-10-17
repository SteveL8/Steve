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
  session_start();
  require('connexion_db.php');
  require("header.php");
  require('DAO.php');

  $_SESSION['panier'];
  //Récupère les 3 plats 
  $topPlats = getPlats(3);

  //Obtenir la liste des catégories
  $categories = get_categories();


  //Vérifie si des catégorie ont été récupèrées
  if ($categories) {
    foreach ($categories as $category) {
      echo $category['nom'] . "<br>";
    }
  } else {
    echo "Erreur lors de la récupération des catégories.";
  }

  ?>
  <div class="parallax">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <video src="video/plats.mp4" class="img-fluid object-fit-cover" id="vid" autoplay loop muted></video>
        </div>
      </div>

      <ul class="row">
        <?php
        //Récupère les categories les plus populaire 
        $popularCategories = getIndexCategories();
        //Vérifie si les categories ont été récupèrées
        if ($popularCategories) :
          $count = 0;

          foreach ($popularCategories as $category) :
            if ($count % 3 == 0) {
              // Commence une nouvelle ligne chaque fois que le compteur atteint un multiple de 3
              echo '</ul><ul class="row">';
            }
        ?>
            <li class="col-md-4">
              <div class="text-center">
                <img src="<?= $category['image'] ?>" alt="<?= $category['libelle'] ?>" width="325" height="325" class="object-fit-cover">
              </div>
              <div class="text-center card mb-4 mx-auto " style="max-width: 325px;">
                <div class="card-body" style="background-color: AntiqueWhite;">
                  <a href="<?= $category['lien'] ?>" style="color: #970747;" class="text-decoration-none font-weight-bold">
                    <strong><?= $category['libelle'] ?></strong>
                  </a>
                </div>
              </div>

            </li>


        <?php
            $count++;
          endforeach;
          if ($count % 3 != 0) {
            echo '</ul>';
          }
        endif;
        ?>
      </ul>
    </div>


    <div class="container">
      <h2 class="mt-5 text-center" style="color: #970747;">Les plats les plus vendus :</h2>
      <div class="row">
        <?php
        //Vérifie si les sont disponibles dans la variable "$topPlats"
        if ($topPlats) {
          // Affiche les plats les plus vendus
          foreach ($topPlats as $plat) {
        ?>
            <div class="col-md-4 mb-4">
              <div class="card text-center">
                <img src="<?= $plat['image'] ?>" alt="<?= $plat['libelle'] ?>">
                <div class="card-body" style="background-color: AntiqueWhite;">
                  <h5 class="card-title" style="color: #970747;" class="text-decoration-none font-weight-bold"><?= $plat['libelle'] ?></h5>
                </div>
              </div>
            </div>
        <?php
          }
        } else {
          echo "Aucun plat trouvé.";
        }
        ?>
      </div>
    </div>
    <?php
    require("footer.php")
    ?>
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>