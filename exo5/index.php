<?php
include_once "../_navbar.php";
include_once "../_errors.php";
?>
<div class="container">
<h1>Exercice 5 : Messages d'erreur via requête GET</h1>
    <p>A l'aide de manipulation des requêtes GET, créez un système d'alerte qui se base sur les requêtes reçues dans
        l'URL pour afficher l'état de fonctionnement de l'application. Ajoutez le sur les exercices précédents.(CONSEIL
        : utilisez un fragment de page pour l'inclure partout plus rapidement).</p>
    <small>Ne pas oublier les conventions de nommage de fragments. Utilisez un système logiquement lors de l'affichage
        des requêtes GET (error,warning,success par exemple)</small>
    <a href="correction.php">Aller à la correction</a>

<?php
include_once "../_errors-messages.php";
?>

</div>

<?php
include_once "../_footer.php";
?>