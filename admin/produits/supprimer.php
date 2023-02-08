<?php


//echo "Id de categories ".$_GET['idc'];
$idproduit = $_GET['idp'];

include "../../include/functions.php";

$conn = connect();

$requette = "DELETE FROM produit WHERE id_prod ='$idproduit'";

$resultat = mysqli_query($conn, $requette);

if ($resultat)
{
  //  echo 'categorie supprimé';
  header('location:liste.php?delete=ok');
}

?>