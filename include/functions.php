<?php 
// function connection
function connect()
{
  $servername  = "localhost";
  $DBuser      = "root";
  $DBpassword  = "";
  $DBname      = "ecommerce";
  
  $conn = mysqli_connect($servername, $DBuser, $DBpassword, $DBname);
  
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    
  //echo "Connected successfully";

  return $conn;
}





//getAllCategories
function getAllCategories()
{
// 1- connexion vers la BD
$conn = connect();



// 2- creation de la requette

$requette = "SELECT * FROM categories";

//3- excution de la requettte
     //تجــبلي les categories من DB
$resultat = mysqli_query($conn, $requette);

//4-resultat de la requette

$categories = mysqli_fetch_all($resultat, MYSQLI_ASSOC);

//var_dump($categories);   ---->pour tester l'affichage de liste de categories et affiche en tableau

return $categories;
}


//getAllProduits

function getAllProducts()
{
    // 1- connexion vers la BD
    $conn = connect();



// 2- creation de la requette

$requette = "SELECT * FROM produit";

//3- excution de la requettte
     //تجــبلي les categories من DB
$resultat = mysqli_query($conn, $requette);

//4-resultat de la requette

$produits = mysqli_fetch_all($resultat, MYSQLI_ASSOC);

//var_dump($produits);   ---->pour tester l'affichage de liste de categories et affiche en tableau

return $produits;

}



//--------------------------------------------//
//Pour chercher un produit
//-------------------------------------------//
function searchProduits($keywords)
{
// 1- connexion vers la BD
$conn = connect();

// 2- creation de la requette

$requette = "SELECT * FROM produit WHERE nom_prod LIKE '%$keywords%'";

//3- excution de la requettte

$resultat = mysqli_query($conn, $requette);

//4-resultat de la requette

$produits = mysqli_fetch_all($resultat, MYSQLI_ASSOC);

//var_dump($produits);   ---->pour tester l'affichage de liste de categories et affiche en tableau

return $produits;
   
}


//-------------------//
function getProduitById($id)
{
// 1- connexion vers la BD
  $conn = connect();

// 2- creation de la requette

$requette = "SELECT * FROM produit WHERE id_prod=$id ";

//3- excution de la requettte

$resultat = mysqli_query($conn, $requette);

//4-resultat de la requette

//$produit = mysqli_fetch_row($resultat);
$produit = mysqli_fetch_assoc($resultat);
return $produit;
}



//function registre
function AddVisiteur($data)
{
  // 1- connextion vers la BD
  $conn = connect();
  // 2- creation de la requettte
  $requette = "INSERT INTO visiteurs (mail_visit, nom_visit, pren_visit, tel_visit, pass_visit) VALUES ('".$data['email']."','".$data['nom']."','".$data['prenom']."','".$data['telephone']."','".$data['password']."')";
  // 3-excution de la requette
  $resultat = mysqli_query($conn, $requette);
  // 4-resultat de la requette
     if($resultat){
       return true;
     }else{
       return false;
     }
  


}


//function to connect for visitor

function ConnectVisiteur($data){

  // 1-connexion vers BD
  $conn = connect();

  // 2-creation de la requette
  $email = $data['email'];
  $pwd   = $data['pwd'];
  $requette ="SELECT * FROM visiteurs WHERE mail_visit='$email' AND pass_visit='$pwd'"; 
  
  // 3-exuction de la requette
  $resultat = mysqli_query($conn, $requette);



  // 4-resultat de la requette
  $user = mysqli_fetch_row($resultat);

  return $user;

  //  var_dump($user);


}

//

function ConnectAdmin($data){
  $conn = connect();

  // 2-creation de la requette
  $login      = $data['login'];
  $password   = $data['password'];
  $requette ="SELECT * FROM administrateur WHERE login_admin='$login' AND password_admin='$password'"; 
  
  // 3-exuction de la requette
  $resultat = mysqli_query($conn, $requette);



  // 4-resultat de la requette
  $user = mysqli_fetch_row($resultat);

  return $user;

  //  var_dump($user);

}




?>



