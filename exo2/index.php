<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Exo 2</title>
</head>

<body>
    
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>