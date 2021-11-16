<?php


if(!empty($_POST)){
    if(empty($_POST['marque']) || empty($_POST['couleur']) || empty($_POST['km']) || empty($_POST['carburant']) || empty($_POST['year'])
     || empty($_POST['price'])){
        echo('tous les champs doivent etre remplis');
        exit();
     } else {
         echo "texte";
         $marque = htmlspecialchars($_POST['marque']);
         $couleur = htmlspecialchars($_POST['couleur']);
         $km = htmlspecialchars(floatval($_POST['km']));
         $carburant = htmlspecialchars($_POST['carburant']);
         $year = htmlspecialchars($_POST['year']);
         $price = htmlspecialchars(floatval($_POST['price']));
     }
}

?>
<div>
    <ul>
        <li><?=$marque?></li>
        <?php if(!empty($_POST['modele'])){
            echo "<li>$modele</li>";
        }
            ?>
        <li><?=$couleur?></li>
        <li><?=$km?></li>
        <li><?=$carburant?></li>
        <li><?=$year?></li>
        <li><?=$price?></li>
        
    </ul>
</div>