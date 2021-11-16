<?php

// $auth = true;
require "config.php";

$alert = false;

if (isset($_GET["error"])) {
    $alert = true;
    if ($_GET['error'] == "missingInput") {
        $type = "secondary";
        $message = "Les deux champs sont requis";
    }
    
    if ($_GET['error'] == "differentPasswords") {
        $type = "warning";
        $message = "Les mots de passe ne concordent pas";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Exo 3</title>
</head>

<body>
    
<?php
if($user){
echo"<pre>";
var_dump($_SESSION);
echo"</pre>";
?>

<div class="container bg-success">
    <h1>Bienvenue <?= $_SESSION['user'] ?></h1>
</div>
<a href="deconnexion.php">Déconnexion</a>

<?php
} else {
?>
    <div class="container">
    
    <form action="index_post.php" method="POST" >  
    <div class="mb-3">
        <label for="username" class="form-label">username</label>
        <input type="text" class="form-control" id="username" name="username">    
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="mb-3">
        <label for="pasword2" class="form-label">Password confirm</label>
        <input type="password" class="form-control" id="pasword2" name="password2">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
<?php
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>