<?php

require_once '../view/layout/header.php';

require_once '../fonction/affiche_voiture.php';

require_once '../view/page/recherche_voiture.php';

$voitures = affiche_voiture();

foreach ($voitures as $voiture) {
    require '../view/page/affiche_voiture.php';

}

require_once '../fonction/cherche_voiture.php';

  require_once '../view/layout/footer.php';