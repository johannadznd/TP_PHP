<?php
require_once '../fonction/pdo.php';

$pdo=Pdo();


if ( $_POST['année_sortie']> 2010 &&  $nb_km = $_POST['nb_km']> 100000){
    $prix=5000;
 }
else {
     $prix=20000;
}


if (!empty($_POST)) {
    $nom = $_POST['nom'];
    $année_sortie = $_POST['année_sortie'];
    $nb_km = $_POST['nb_km'];
  
$query = "INSERT INTO voiture (nom,année_sortie,nb_km,prix) VALUES ('$nom','$année_sortie','$nb_km','$prix')";

$stmt = $pdo->query($query);

echo $prix,"€";

}

require_once '../view/page/message.php';


