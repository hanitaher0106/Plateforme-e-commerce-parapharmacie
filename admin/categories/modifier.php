<?php

// 1_ recuperation des données de la formulaire

$id          = $_POST['idc'];
$nom         = $_POST['nom'];

$description = $_POST['description'];

// 2_ La chaine de connexion
include "../../include/functions.php";
$conn = connect();

// 3_ La creation de la requette d'excution
$requette = "UPDATE categories SET nom_categ='$nom', desc_categ='$description'WHERE id = '$id' ";

// 4_ Excution de la requette

$resultat = mysqli_query($conn, $requette);

if($resultat)
{
    header('location:liste.php?modif=ok');
}


?>