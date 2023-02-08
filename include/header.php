 <!--Navbar-->
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Parapharmacie Ammar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                   catégories
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  
                  <?php
                          foreach($categories as $categorie)
                          {
                            print '<li><a class="dropdown-item" href="#">'.$categorie['nom_categ'].'</a></li>';
                            
                          }
                         
                  ?>

                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="connexion.php">connexion</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="registre.php">registre</a>
              </li>
            </ul>
            <form class="d-flex" action="index.php" method="POST">
              <input class="form-control me-2" type="search" placeholder="Chercher" aria-label="search" name="search">
              <button class="btn btn-outline-success" type="submit">Chercher</button>
            </form>
          </div>
        </div>
      </nav>