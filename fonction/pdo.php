<?php 
require_once '../view/layout/header.php';

function pdo():PDO{


try { 

    $pdo = new PDO(
      "mysql:host=localhost;dbname=TP_PHP",
      "TP_PHP",
      "ItNtdMyIWZwuIJNb"
    );
    return $pdo;
    } catch(PDOException $ex) {
    exit("Erreur lors de la connexion à la base de données");
    }

}
require_once '../view/layout/footer.php';

require_once '../view/layout/footer.php';
