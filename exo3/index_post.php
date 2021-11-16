<?php


require "config.php";

if(!empty($_POST)){
    if(in_array('',$_POST)){
        header('location:index.php?error=missingInput');
        exit();
    } else {
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        $password2 = htmlspecialchars($_POST['password2']);
        $email = htmlspecialchars($_POST['email']);
    }
}

if($password !== $password2){
    header('location:index.php?error=differentPasswords');
    exit();
} else {
    $_SESSION['user'] = $username;
    $password = password_hash($password, PASSWORD_DEFAULT);
    $_SESSION['password'] = $password;
    $_SESSION['email'] = $email;
    header('Location:index.php');
}


?>