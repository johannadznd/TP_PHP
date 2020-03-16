<?php
require 'pdo.php';

function affiche_voiture ():array{

    $pdo = pdo();

    $query="SELECT * FROM voiture WHERE visible=1";

    $stmt = $pdo->query($query);

    $voiture = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $voiture;
}
