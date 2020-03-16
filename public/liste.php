<?php

require_once '../view/layout/header.php';

require_once '../fonction/liste.php';

$listes = liste();

foreach ($listes as $liste) {
    require '../view/page/liste.php';

}

  require_once '../view/layout/footer.php';