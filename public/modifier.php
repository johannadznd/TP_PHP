<?php
require_once '../view/layout/header.php';
?>
<form style="margin: 2vw" method="POST" action="fonction_modifier.php">   
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
  
  <div class="form-group col-md-6">
      <label >prix</label>
      <input name="prix" class="form-control" placeholder="2000">
    </div>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1" name="visible">visible</label>
  </div>
  
  <button type="submit" class="btn btn-dark">modifier</button>



<?php

require_once '../view/layout/footer.php';