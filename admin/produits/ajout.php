<?php

$nomprod           = $_POST['nom'];
$description       = $_POST['description'];
$prix              = $_POST['prix'];

//upload image

$target_dir = "../../images/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);

if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
     $image = $_FILES["image"]["name"];
  } else {
    echo "Sorry, there was an error uploading your file.";
  }


//  La chaine de connexion
include "../../include/functions.php";
$conn = connect();

// 3_ La creation de la requette d'excution
$requette = "INSERT INTO produit (nom_prod, desc_prod , prix_prod, img_prod) VALUES ('$nom','$description','$prix','$image')";

$resultat = mysqli_query($conn, $requette);

if($resultat)
{
    header('location:liste.php?ajout=ok');
} 




?>