<header>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a href="index.php"><img src="img/logo.png" class="navbar-brand img-fluid rounded" alt="Logo" title="Logo"
            width="110" height="24"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav p-3 me-auto h2 text-decoration-underline">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="categorie.php">Catégorie</a>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Plat
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="plat_asainfood.php">Plat Japonais</a></li>
                <li><a class="dropdown-item" href="plat_pasta.php">Pâtes</a></li>
                <li><a class="dropdown-item" href="plat_burger.php">Burger</a></li>
                <li><a class="dropdown-item" href="plat_pizza.php">Pizza</a></li>
                <li><a class="dropdown-item" href="plat_boisson.php">Boisson</a></li>
                <li><a class="dropdown-item" href="plat_dessert.php">Dessert</a></li>
              </ul>
            </li>
            <!--<li class="nav-item">
              <a class="nav-link active" aria-current="page" href="plat.html">Plat</a>-->
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="contact.php">Contact</a>
            </li>
          </ul>
          <a href="panier.php"><svg xmlns="http://www.w3.org/2000/svg" width="150" height="30" fill="currentColor"
              class="bi bi-basket me-5 link-dark icon-link" id="pa"  viewBox="0 0 16 16">
              <path
                d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z" />
            </svg></a>
          <form class="d-flex" role="search">
            <input class="form-control ms-5" type="search" placeholder="Rechercher" aria-label="Search">
            <button class="btn btn-outline-secondary" type="submit">Rechercher</button>
          </form>
        </div>
      </div>
    </nav>
  </header>