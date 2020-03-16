<?php
require 'pdo.php';

function liste ():array{

    $pdo = pdo();

    $query="SELECT * FROM voiture";

    $stmt = $pdo->query($query);

    $voiture = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $voiture;
}
