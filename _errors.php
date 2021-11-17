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
}
if (isset($_GET['success'])) {
    $alert = true;
    if ($_GET['success'] == "disconnect") {
        $type = 'success';
        $message = 'Vous êtes déconnectés';
    }
  }


?>