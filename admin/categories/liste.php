<?php



include "../../include/functions.php";
$categories = getAllCategories();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Admin : profile</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Dashboard</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="../../index.php">Déconnexion </a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link " href="#">
                  <span data-feather="home"></span>
                  Home <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="">
                  <span data-feather="file"></span>
                  Categories
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="categories/produits/liste.php">
                  <span data-feather="shopping-cart"></span>
                  Produits
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Users
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Reports
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="../profile.php">
                  <span data-feather="layers"></span>
                  Profile
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Liste des categories</h1>
            <div>
                <a href=" ajout.php" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Ajouter</a>
       
            </div>
          </div>
                       <!--Liste Start-->
                       <div>
            <?php
            //alert for add
            if(isset($_GET['ajout']) && $_GET['ajout']== "ok"){
            print '<div class="alert alert-success">Categorie ajouté avec success</div>';}
             ?>
             <?php
            //alert for delete
            if(isset($_GET['delete']) && $_GET['delete']== "ok"){
            print '<div class="alert alert-success">Categorie supprimé avec success</div>'; }
               ?>      
            <?php
            //alert for update
            if(isset($_GET['modif']) && $_GET['modif']== "ok"){
              print '<div class="alert alert-success">Categorie modifié avec success</div>'; }
            ?>
 
            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom categorie</th>
      <th scope="col">Description categorie</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
      <?php
      foreach($categories as $categorie)
      {
  
          print '
          <tr>
          <th scope="row">'.$categorie['id_categ'].'</th>
          <td>'.$categorie['nom_categ'].'</td>
          <td>'.$categorie['desc_categ'].'</td>
          <td> 
              <a data-toggle="editModal" data-target="#editModal '.$categorie['id_categ'].'" class="btn btn-success">Modifier  </a> 
              <a onClick="return popUpDeleteCategorie()" href="supprimer.php?idc='.$categorie['id_categ'].'" class="btn btn-danger">Suppprimer </a> 
          </td>
        </tr> 
          ';
      }

      
    ?>
  </tbody>
</table> 
            </div>
        </main>
      </div>
    </div>


<!-- Modal ajout-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajout categorie</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="ajout.php" method="post">
              <div class="form-group"> 
                  <input type="text" name="nom"  class="form-control" placeholder="Nom de categorie">
              </div>
              <div class="form-group">
                   <textarea        name="description" class="form-control" placeholder="Description de categorie"></textarea>
              </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Ajouter</button>
      </div>
         </form>
    </div>
  </div>
</div>

<?php
foreach($categories as $index => $categorie ){ ?>
    
<!-- Modal modifier  -->
<div class="modal fade" id="editModal<?php echo $categorie['id_categ']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier categorie</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="modifier.php" method="post">
            <input type="hidden" value="<?php echo $categorie['id_categ'];   ?>" name="idc" />
              <div class="form-group"> 
                  <input type="text" name="nom"  class="form-control" value="<?php echo $categorie['nom_categ']; ?>" placeholder="Nom de categorie">
              </div>
              <div class="form-group">
                   <textarea        name="description" class="form-control"  placeholder="Description de categorie"><?php echo $categorie['desc_categ'];   ?></textarea>
              </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Ajouter</button>
      </div>
         </form>
    </div>
  </div>
</div>


  <?php
}

?>
 





    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.1/dist/Chart.min.js"></script>
    <script>
      function popUpDeleteCategorie(){
        return confirm("Voulez-vous vraiment supprimer la categorie ?")

      }  
    </script>
    
  </body>
</html>
