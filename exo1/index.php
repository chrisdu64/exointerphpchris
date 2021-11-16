<?php

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

    
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Exo 1</title>
</head>

<body>
    
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
echo ('<div>
<ul>
    <li>$lastname</li>
    <li>$firstname</li>
    <li>$gender</li>
    <li>$adress</li>
    <li>$city</li>
    <li>$postcode</li>
    </ul>
</div>')
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>