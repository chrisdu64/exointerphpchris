<?php
$alert = false;
if (isset($_GET["error"])) {
    $alert = true;
    if ($_GET['error'] == "missingInput") {
        $type = "secondary";
        $message = "Les champs requis sont vides";
    }
    if ($_GET['error'] == "differentPasswords") {
        $type = "warning";
        $message = "Les mots de passe ne concordent pas";
    }
    if ($_GET['error'] == "inputTooShort") {
        $type = "warning";
        $message = "Pas assez long";
    }
    if ($_GET['error'] == "unknownError") {
        $type = "warning";
        $message = "Attention contactez votre administrateur une grave erreur est survenue";
    }
    if ($_GET['error'] == "noId") {
        $type = "warning";
        $message = "Pas d'id pour la suite";
    }
}
if (isset($_GET['success'])) {
    $alert = true;
    if ($_GET['success'] == "disconnect") {
        $type = 'success';
        $message = 'Vous êtes déconnectés';
    }
    if ($_GET['success'] == "addedLigne") {
        $type = 'success';
        $message = 'Nouvelle ligne créée';
    }
    if ($_GET['success'] == "modif") {
        $type = 'success';
        $message = 'Modification effectuée';
    }
  }


?>