<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $liste['nom'];?> </h5>
    <h6 class="card-text"><?php echo $liste['nb_km']; echo' km';?> </h6>
    <h6 class="card-text"><?php echo $liste['prix']; echo' €';?> </h6>
    <h6 class="card-text"><?php echo $liste['année_sortie'];?> </h6>
    <h6 class="card-text"><?php echo 'visible:',$liste['visible'];?> </h6>
    <a class="nav-link" href="modifier.php">modifier</a>
  </div>
</div>


