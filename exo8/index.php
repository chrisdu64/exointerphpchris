<?php
$auth = true;
require "../exo7/connexion.php";
include_once "../_navbar.php";
include_once "../_errors.php";

$viewLignes = 'SELECT * from lignes';
$reqViewLignes = $connexion->query($viewLignes);
$lignes = $reqViewLignes->fetchAll();

?>

<body>
    
    <h1>Exercice 8 : Affichage des données de la BDD</h1>
    <p>A partir de la connexion réalisée à l'exercice 6 et des apprentissages des exercices précédents, affichez
        l'ensemble des lignes de transports disponibles dans votre base de données dans un tableau HTML. A chaque ligne
        de transport, il devra y avoir deux actions possibles dans le tableau, éditer et supprimer (Bien que non
        fonctionnelles).</p>
    <small>Il est peut-être temps de définir un mode de récupération par défaut des données par PDO afin d'éviter
        d'avoir un tableau doublé.</small>
    <p><b>Bonus : ajoutez un champ de recherche pour filtrer les résultats par leur nom (A l'aide de l'instruction LIKE
            %recherche% dans une requête SQL)</b></p>
<?php
include_once "../_errors-messages.php";

foreach($lignes as $ligne){
?>
<div class="card m-4" style="width:30%">
    <div class="card-body">
        <h3 class="card-title">Ligne : <?php echo $ligne['lign'];?> .</h3>                
        <p class="text-bold">Description :</p>
        <p>Terminus A de la ligne : <?php echo $ligne['terminus1']; ?>.</p>
        <p>Terminus B de la ligne : <?php echo $ligne['terminus2'];?>.</p>
        <hr>
        
        <div class="d-flex justify-content-between">
        <a href="#" class="btn btn-success ">Modifier la ligne</a>            
        <a href="modifier-lignes.php" class="btn btn-info ">Supprimer la ligne</a>
        </div>     
  </div>


<?php
}
include_once "../_footer.php";
?>
</body>

</html>