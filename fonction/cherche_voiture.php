<?php

require_once 'pdo.php';

$pdo = pdo();

if (isset($_GET['a'])) {
  $search = $_GET['a'];
 

  $query = "select * FROM voiture where nom LIKE :search";
  $stmt = $pdo->prepare($query);

  $stmt->execute(['search' => "%$search%"]);

  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

  require_once '../view/page/affiche_voiture.php';

   var_dump($results);
}

