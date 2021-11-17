<?php
include_once "../_navbar.php";
include_once "../_errors.php";
?>

<body>
   
    <h1>Exercice 7 : Ajout simple à la BDD</h1>
    <p>A partir de la connexion réalisée à l'exercice 6 et des apprentissages des exercices précédents, utilisez un
        formulaire pour ajouter des nouvelles lignes de transport dans la base de données. Vous pourrez vous inspirer du
        réseau de transports de votre choix.</p>
    <small>Utilisez un système de bloc try/catch afin de réaliser vos opérations SQL.Sécurisez le tout avec des requêtes
        préparées.</small>
    <p><b>Bonus : Ajoutez des messages d'erreur dans le système pour renforcer l'expérience utilisateur</b></p>
<?php
include_once "../_errors-messages.php";
?>

<div class="container">
<form action="index_post.php" method="POST" >
  
  <div class="mb-3">
    <label for="lign" class="form-label">Ligne</label>
    <input type="text" class="form-control" id="lign" name="lign">
  </div>
  <div class="mb-3">
    <label for="terminus1" class="form-label">Terminus A</label>
    <input type="text" class="form-control" id="terminus1" name="terminus1">
  </div>
  <div class="mb-3">
    <label for="terminus2" class="form-label">Terminus B</label>
    <input type="text" class="form-control" id="terminus2" name="terminus2">
  </div>

  <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
</div>
    

<?php
include_once "../_footer.php";
?>
</body>

</html>