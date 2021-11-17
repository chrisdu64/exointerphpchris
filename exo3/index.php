<?php
include_once "../_navbar.php";
include_once "../_errors.php";

session_start();

    if (isset($_GET['logout'])) {
        session_destroy();
        header('Location:index.php?success=disconnect');
    }

?>



<main>
<h1>Exercice 3 :</h1>

<?php
include_once "../_errors-messages.php";

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