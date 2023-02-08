<?php

// 1_ recuperation des données de la formulaire


$nom         = $_POST['nom'];

$description = $_POST['description'];

// 2_ La chaine de connexion
include "../../include/functions.php";
$conn = connect();

// 3_ La creation de la requette d'excution
$requette = "INSERT INTO categories (nom_categ,desc_categ) VALUES ('$nom' ,'$description')";

// 4_ Excution de la requette

$resultat = mysqli_query($conn, $requette);

if($resultat)
{
    header('location:liste.php?ajout=ok');
}


?>