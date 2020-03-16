<?php



if (!$stmt) {
  $erreur = $pdo->errorInfo();
  echo "Il y a eu un problème lors de l'envoie de formulaire" . $erreur[2];
} else {
  echo "Formulaire envoyé";
}
