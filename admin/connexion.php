<?php
   //include
  include ("../include/functions.php");
   //Appel function

  $user = true;

  if(!empty($_POST)) { //click sur le boutton sauvgarder

    $user = ConnectAdmin($_POST);
    if(is_array($user) && count($user) > 0){ 
      session_start();

      $_SESSION["login_admin"]    = $user["login"];
      
      



      header('location:profile.php');  //Redirection vers la page profile

    }
  }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.8/sweetalert2.min.css" rel="stylesheet">
</head>
<body>


    <!--Main-->
    <div class="col-12 p-5">

        <h1 class="text-center">Espace administrateur</h1>

        <form action="connexion.php" method="post">
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Login</label>
              <input type="text" name="login" class="form-control" id="exampleInputPassword1">
            </div>

              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
              </div>

            <button type="submit" class="btn btn-primary">Se connecter</button>
          </form>
    
    </div>
 



    <!--Footer-->
    <div class="bg-dark text-center p-5 mt-4">
        <p class="text-white">Tous les droits sont réservés 2022</p>
        <p class="text-white">Copyright © Hani Taher</p>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!--library sweetalert2-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.all.js"></script>
<?php

if(!$user){
  print "
<script>
Swal.fire({
  icon: 'error',
  title: 'Erreur',
  text: 'Coordonnées non valides!',
  timer: 1500
})

</script>
";
}
?>
</html>