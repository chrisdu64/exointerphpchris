<?php

$auth = true;
require "../exo7/connexion.php";



$getId = explode('=', $_SERVER['HTTP_REFERER'])[1];



if (!($getId == $_POST['id'])) {
    header("Location:index.php?id=$getId&error=malformedInput");
    exit();
}

if (in_array("",$_POST)) {
    header("Location:index.php?id=$getId&error=missingInput");
    exit();
} else {
    $lign = htmlspecialchars(trim($_POST['lign']));
    $terminus1 = htmlspecialchars(trim($_POST['terminus1']));
    $terminus2 = htmlspecialchars(trim($_POST['terminus2']));
    $ligne_id = $_POST['id'];
    
}

$modifLigne = 'UPDATE lignes SET lign=:lign,terminus1=:terminus1,terminus2=:terminus2 WHERE lign_id=:id';
$reqModifLigne = $connexion->prepare($modifLigne);
$reqModifLigne->bindValue(':lign', $lign, PDO::PARAM_STR);
$reqModifLigne->bindValue(':terminus1', $terminus1, PDO::PARAM_STR);
$reqModifLigne->bindValue(':terminus2', $terminus2, PDO::PARAM_STR);
$reqModifLigne->bindValue(':id', $ligne_id);


if ($reqModifLigne->execute()) {    
    header("Location:index.php?success=modif");
    exit();
} else {
    header("Location:index.php?id=$getId&error=unknownError");
    exit();
}