<?php
include_once "../_navbar.php";
include_once "../_errors.php";
?>

<main>
<h1>Exercice 2 :</h1>

<?php
include_once "../_errors-messages.php";
?>
    
<div class="container">
<form action="index_post.php" method="POST" >
  
  <div class="mb-3">
    <label for="marque" class="form-label">Marque</label>
    <input type="text" class="form-control" id="marque" name="marque">
  </div>
  <div class="mb-3">
    <label for="modele" class="form-label">Modèle</label>
    <input type="text" class="form-control" id="modele" name="modele">
  </div>
  <div class="mb-3">
    <label for="couleur" class="form-label">Couleur</label>
    <input type="text" class="form-control" id="couleur" name="couleur">
  </div>
  <div class="mb-3">
    <label for="km" class="form-label">Kilométrage</label>
    <input type="number" class="form-control" id="km" name="km">
  </div>
  <div class="mb-3">
    <label for="carburant" class="form-label">Carburant</label>
    <input type="text" class="form-control" id="carburant" name="carburant">
  </div>
  <div class="mb-3">
    <label for="year" class="form-label">Année</label>
    <input type="date" class="form-control" id="year" name="year">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Prix</label>
    <input type="number" class="form-control" id="price" name="price">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</main>

<?php
include_once "../_footer.php";

?>