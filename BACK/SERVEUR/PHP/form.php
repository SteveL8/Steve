<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>testphp</title>
</head>

<body>
<div class="container">
        <form class="row"action="monscript.php" method="POST" aria-required="true" id="formcontact">
            <div class="col-lg-6 col-md-6 col-sm-12 mt-4">
                <div class="form-floating">
                    <input type="text" name="nom" class="form-control" placeholder="Nom" required>
                    <label for="validationCustom01" class="form-label">Nom</label>
                </div>
                <div class="text-danger ms-2">
                    Ce champs est obligatoire.
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class=" form-floating mt-4 ">
                    <input type="text" name="prenom" class="form-control " placeholder="Prénom" required>
                    <label for="ValidationCustom02" class=" form-label">Prénom</label>
                </div>
                <div class="text-danger ms-2">
                    Ce champs est obligatoire
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class=" form-floating mt-5 ">
                    <input type="email" name="email" class="form-control " placeholder="Email" required>
                    <label for="ValidationCustom03" class=" form-label">Email</label>
                </div>
                <div class="text-danger ms-2">
                    Ce champs est obligatoire
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mt-4 mt-5">
                <div class="form-floating">
                    <input type="text" name="tel" class="form-control" placeholder="Téléphone" required>
                    <label for="ValidationCustom04" class="form-label">Téléphone</label>
                </div>
                <div class="text-danger ms-2">
                    Ce champs est obligatoire.
                </div>
            </div>
            <div class="col form-floating mb-5 ">
                <textarea class="form-control mt-4 " name="demande" placeholder="Votre demande" style="height: 150px"
                    required></textarea>
                <label for="floatingTextarea2" class="form-label ms-3 mt-4">Votre demande</label>
                <div class="text-danger ms-2">
                    Ce champs est obligatoire
                </div>
            </div>
            <div class="row">
                <div class="col position-relative mb-5">
                    <button type="submit" class="btn btn-outline-secondary position-absolute end-0  mt-1" id="envoyer"
                        value="formcontact">Envoyer</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>