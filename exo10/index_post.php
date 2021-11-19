<?php

$auth = true;
require "../exo7/connexion.php";



$getId = explode('=', $_SERVER['HTTP_REFERER'])[1];



if (!($getId == $_POST['id'])) {
    header("Location:../exo8/index.php?id=$getId&error=malformedInput");
    exit();
}
$ligne_id = intval(htmlspecialchars(trim($_POST['id'])));
    

try{
$supprLigne = 'DELETE FROM  lignes WHERE lign_id=:id';
$reqSupprLigne = $connexion->prepare($supprLigne);
$reqSupprLigne->bindValue(':id', $ligne_id);

$reqSupprLigne->execute();   
    header('Location:../exo8/index.php?success=delete');
} catch (PDOException $erreur) {    
    echo $erreur->getMessage();
    
    exit();
}