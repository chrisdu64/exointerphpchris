<?php

$auth = true;
require "../exo7/connexion.php";
include_once "../_navbar.php";
include_once "../_errors.php";
include_once "_get-id.php";



?>


<body>
    
    <h1>Exercice 9 : Edition simple de la BDD</h1>
    <p>A partir de la connexion réalisée à l'exercice 6 et des apprentissages des exercices précédents, utilisez un
        formulaire pour éditer les lignes de transport dans la base de données.</p>
    <small>Utilisez un système de bloc try/catch afin de réaliser vos opérations SQL.Sécurisez le tout avec des requêtes
        préparées.N'oubliez pas l'instruction WHERE sous peine de tout modifier</small>
    <p><b>Bonus : Ajoutez des messages d'erreur sur la page pour renforcer l'expérience utilisateur</b></p>

<?php
include_once "../_errors-messages.php";
?>   

    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ps ps--active-y">
    <div class="card container m-4 p-4">
       
        <form action="index_post.php" method="post">
            <p class="text-bold">Nom de la ligne :</p>
            <input type="text" class="form-control form-control-lg" name="lign" value="<?php echo $ligne['lign'];?>"></input>
            <hr>
            <p class="text-bold">Terminus A :</p>
            <input type="text" class="form-control" name="terminus1" value="<?php echo $ligne['terminus1']; ?>"/>
            <hr>
            <p class="text-bold">Terminus B :</p>
            <input type="text" class="form-control" name="terminus2" value="<?php echo $ligne['terminus2']; ?>"/>
            <hr>
            
            <input type="hidden" name="id" value="<?php echo $ligne['lign_id']; ?>">
            <button type="submit" class="btn btn-warning col-2">Modifier l'annonce</button>
            
        </form>
        <a class="nav-link" class="btn btn-warning col-2" href="../exo8/">Annuler la modification</a>
    </div>
<?php
include_once "../_footer.php";
?>
</body>


</html>