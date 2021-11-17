<?php
require "dev.env.php";
$connexion_string = "mysql:dbname=".DATABASE.";host=".HOST;

try {
    $connexion = new PDO($connexion_string, USER, PASSWORD);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // rajout pou exercice 8
    $connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    // echo 'ok';
} catch (PDOException $erreur) {    
    echo $erreur->getMessage();
}
?>
