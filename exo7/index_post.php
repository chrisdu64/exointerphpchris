<?php
require "connexion.php";


    if (in_array ("",$_POST)){
        header('Location:index.php?error=missingInput');
        exit();
     } else {         
         $lign = htmlspecialchars($_POST['lign']);
         $terminus1 = htmlspecialchars($_POST['terminus1']);
         $terminus2 = htmlspecialchars($_POST['terminus2']);         
     }

$insertLigne = 'INSERT INTO lignes (lign,terminus1,terminus2) VALUES(:lign,:terminus1,:terminus2)';
$reqInsertLigne = $connexion->prepare($insertLigne);
$reqInsertLigne->bindValue(':lign', $lign, PDO::PARAM_STR);
$reqInsertLigne->bindValue(':terminus1', $terminus1, PDO::PARAM_STR);
$reqInsertLigne->bindValue(':terminus2', $terminus2, PDO::PARAM_STR);
if ($reqInsertLigne->execute()) {
    header('Location:index.php?success=addedLigne');
    exit();
} else {
    header('Location:index.php?error=unknownError');
    exit();
}