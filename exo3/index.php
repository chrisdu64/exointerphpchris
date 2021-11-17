<?php
include_once "../_navbar.php";

session_start();

    if (isset($_GET['logout'])) {
        session_destroy();
        header('Location:index.php?success=disconnect');
    }

$alert = false;

if (isset($_GET["error"])) {
    $alert = true;
    if ($_GET['error'] == "missingInput") {
        $type = "secondary";
        $message = "Les deux champs sont requis";
    }
    
    if ($_GET['error'] == "differentPasswords") {
        $type = "warning";
        $message = "Les mots de passe ne concordent pas";
    }
}
?>



<main>
<h1>Exercice 3 :</h1>
<?php
if(!empty($_SESSION)){
echo"<pre>";
var_dump($_SESSION);
echo"</pre>";
?>

<div class="container bg-success">
    <h1>Bienvenue <?= $_SESSION['user'] ?></h1>
    <a href="?logout">Déconnection</a>
</div>


<?php
} else {
?>
    <div class="container">
    
    <form action="index_post.php" method="POST" >  
    <div class="mb-3">
        <label for="username" class="form-label">username</label>
        <input type="text" class="form-control" id="username" name="username">    
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="mb-3">
        <label for="pasword2" class="form-label">Password confirm</label>
        <input type="password" class="form-control" id="pasword2" name="password2">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
<?php
}
?>

</main>

<?php
include_once "../_footer.php";
?>