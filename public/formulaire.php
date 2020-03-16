<?php
require_once '../view/layout/header.php';
?>
<form style="margin: 2vw" method="POST" action="fonction_formulaire.php">   
  <div class="form-row">
  <div class="form-group col-md-6">
      <label >nom</label>
      <input name="nom" class="form-control" placeholder="nom">
    </div>
    <div class="form-group col-md-6">
      <label >Année de sortie</label>
      <input name="année_sortie" class="form-control" placeholder="2014">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label >Nombre de kilomètre</label>
      <input name="nb_km" class="form-control" placeholder="100000" >
    </div>
  </div>
  
  <button type="submit" class="btn btn-dark">Estimer prix</button>


<?php
require_once '../view/layout/footer.php';