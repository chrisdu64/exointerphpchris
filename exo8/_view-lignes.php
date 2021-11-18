<?php

$auth = true;
require "../exo7/connexion.php";

$viewLignes = 'SELECT * from lignes';
$reqViewLignes = $connexion->query($viewLignes);
$lignes = $reqViewLignes->fetchAll();
?>