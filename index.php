<?php
   //include
  include ("include/functions.php");
   //Appel function
  $categories = getAllCategories();



  //for rearch
  if(!empty($_POST)) //button search clicked
  {
      //echo "button search clicked";
      //echo $_POST['search'];
      $produit = searchProduits($_POST['search']);
  }else
  {
      $produit = getAllProducts();
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parapharmacie Ammar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>



    <!--Navbar-->
    <?php
      include ("include/header.php");
    ?>
          <!--Main-->
        
      <div class="row col-12 mt-4 p-4">
          <!--Card-->
          <?php
          foreach($produit as $produit)
          {
              print '          
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                  <img src="images/'.$produit['img_prod'].'" class="card-img-top" alt="...">
                  <div class="card-body">
                  <h5 class="card-title">'.$produit['nom_prod'].'</h5>
                  <p class="card-text">'.$produit['desc_prod'].'</p>
                  <a href="detailsproduit.php?id='.$produit['id_prod'].'" class="btn btn-primary">Afficher</a>
              </div>
            </div>
        </div>';
          }
          ?>

      </div>


    <!--Footer-->
    <div class="bg-dark text-center p-5 mt-4">
        <p class="text-white">Tous les droits sont réservés 2022</p>
        <p class="text-white">Copyright © Hani Taher</p>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>