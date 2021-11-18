<?php

$id = htmlspecialchars(trim($_GET['id']));


$viewLignes = "SELECT * from lignes WHERE lign_id = :lign_id";
$reqViewLignes = $connexion->prepare($viewLignes);
$reqViewLignes->bindValue(':lign_id',$id);
$reqViewLignes->execute();
$ligne = $reqViewLignes->fetch();
if(empty($ligne)){
    header('Location:index.php?error=noId');
        exit();
}

?>