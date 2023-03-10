<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="homepage.php">
            <img src="../assets/img/logo.png" alt="Logo" width="auto" height="40" class="me-2">
            SandWEches
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?php if($page=="home"){echo 'active';}?>" aria-current="page" href="homepage.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($page=="catalog"){echo 'active';}?>" href="catalog.php">Tutti i prodotti</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Categorie
                    </a>
                    <ul class="dropdown-menu" \>
                        <li><a class="dropdown-item" href="#">Panini</a></li>
                        <li><a class="dropdown-item" href="#">Snack</a></li>
                        <li><a class="dropdown-item" href="#">Piadine</a></li>
                        <li><a class="dropdown-item" href="#">Bibite</a></li>
                        <!-- <li>
                        <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($page=="profilo"){echo 'active';}?>" href="profile.php">Profilo</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Cerca qualcosa..." aria-label="Search">
                <button class="btn btn-warning me-2" type="submit">Cerca</button>
            </form>
            <!-- <button class="btn btn-danger me-2" type="submit">Esci</button> -->
            <a href="..\functions\logout.php" class="btn btn-danger me-2" role="button">Esci</a>
        </div>
    </div>
</nav>