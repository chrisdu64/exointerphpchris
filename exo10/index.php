<?php

$auth = true;
require "../exo7/connexion.php";
include_once "../_navbar.php";
include_once "../_errors.php";
include_once "../exo9/_get-id.php";

?>

<body>

<div class="container">
    <form class="card-form" action="index_post.php" method="POST">
    <h3>Vous allez supprimer la ligne, êtes-vous sûr?</h3>
    <input type="hidden" name="id" value="<?php echo $ligne['lign_id']; ?>">
    <button type="submit" class="btn btn-warning">Oui</button>
    <a href="../exo8/index.php" class="btn btn-success ">Non</a>
    </form>
</div>

</body>
<?php
include_once "../_footer.php";
?>

</html>