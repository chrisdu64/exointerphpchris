<?php

include_once "../_navbar.php";

if(!empty($_POST)){
  if(in_array('',$_POST)){
    echo('tous les champs doivent etre remplis');
    exit();
} else{
    $lastname = htmlspecialchars($_POST['lastname']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $gender = htmlspecialchars($_POST['gender']);
    $adress = htmlspecialchars($_POST['adress']);
    $city = htmlspecialchars($_POST['city']);
    $postcode = htmlspecialchars($_POST['postcode']);

}}
?>

<main>
  <h1>Exercice 1 :</h1>
    
<div class="container">
<form action="" method="POST" >
  
  <div class="mb-3">
    <label for="lastname" class="form-label">Nom</label>
    <input type="text" class="form-control" id="lastname" name="lastname">
  </div>
  <div class="mb-3">
    <label for="firstname" class="form-label">Prénom</label>
    <input type="text" class="form-control" id="firstname" name="firstname">
  </div>
  <div class="mb-3">
    <label for="gender" class="form-label">Genre</label>
    <input type="text" class="form-control" id="gender" name="gender">
  </div>
  <div class="mb-3">
    <label for="adress" class="form-label">Adresse</label>
    <input type="text" class="form-control" id="adress" name="adress">
  </div>
  <div class="mb-3">
    <label for="city" class="form-label">Ville</label>
    <input type="text" class="form-control" id="city" name="city">
  </div>
  <div class="mb-3">
    <label for="postcode" class="form-label">Code postal</label>
    <input type="text" class="form-control" id="postcode" name="postcode">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<?php
echo "<div>
<ul>
    <li>$lastname</li>
    <li>$firstname</li>
    <li>$gender</li>
    <li>$adress</li>
    <li>$city</li>
    <li>$postcode</li>
    </ul>
</div> ";
?>

</main>
<?php
include_once "../_footer.php";
?>