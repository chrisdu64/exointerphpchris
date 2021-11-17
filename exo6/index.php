    <?php
        include_once "../_navbar.php";
        include_once "../_errors.php";
    ?>


<body>
    <h1>Exercice 6 : Connexion à la BDD</h1>
    <?php
include_once "../_errors-messages.php";
?>
    <p>A partir de vos connaissances, établissez une connexion à une base de données MySQL. VOUS N'UTILISEREZ PAS DE
        CONSTANTES DANS CETTE METHODE, simplement les infos de connexion. Le fichier de connexion ne contiendra que du
        PHP. Cette base de données se nommera transports et contiendra 1 table nommée lignes de 4 colonnes id,nom de
        ligne,terminus a et terminus
        b. Assurez vous d'utiliser PDO lors de l'établissement de la connexion et vérifiez si elle fonctionne.</p>
    <small>Utilisez un système de bloc try/catch afin de réaliser vos opérations SQL.</small>
    <p><b>Bonus : Ajoutez un système de variables d'environnements pour sécuriser la connexion.</b></p>
    <a href="correction.php">Aller à la correction</a>

    
    <?php
include_once "../_footer.php";
?>
</body>

</html>