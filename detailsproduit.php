<?php
   //include
  include ("include/functions.php");
   //Appel function
  $categories = getAllCategories();
  


  if(isset($_GET['id']))
  {
      $produit = getProduitById ($_GET['id']);

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
        <div class="card col-8 offset-2">
                    <img src="images/<?php echo $produit['img_prod']; ?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $produit['nom_prod']; ?></h5>
                        <p class="card-text"><?php   echo $produit['desc_prod']; ?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?php echo $produit['prix_prod'];?>DT</li>
                            <li class="list-group-item"><?php echo $produit['id_categ'];?></li> 
                            <input type="number" class="form-control" step="1" placeholder="Quantite de produit">
    <button type="submit" class="btn btn-primary">Commander</button>
</ul>      
                           
    </div>

      </div>


    <!--Footer-->
    <div class="bg-dark text-center p-5 mt-4">
        <p class="text-white">Tous les droits sont réservés 2022</p>
        <p class="text-white">Copyright © Hani Taher</p>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>