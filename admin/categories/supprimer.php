<?php


//echo "Id de categories ".$_GET['idc'];
$idcategorie = $_GET['idc'];

include "../../include/functions.php";

$conn = connect();

$requette = "DELETE FROM categories WHERE id_categ ='$idcategorie'";

$resultat = mysqli_query($conn, $requette);

if ($resultat)
{
  //  echo 'categorie supprimé';
  header('location:liste.php?delete=ok');
}

?>