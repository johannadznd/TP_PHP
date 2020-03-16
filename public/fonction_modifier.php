<?php
require '../fonction/pdo.php';
$pdo= pdo();

if (!empty($_POST)) {
    $nom = $_POST['nom'];
    $année_sortie = $_POST['année_sortie'];
    $nb_km = $_POST['nb_km'];
    $prix = $_POST['prix'];
    //$visible = $_POST['visible']; ne marche pas 
   
  
$query = "UPDATE voiture SET 'nom'=$nom, 'année_sortie'=$année_sortie, 'nb_km'=$nb_km, 'prix'=$prix, WHERE 1";

$stmt = $pdo->query($query);

}