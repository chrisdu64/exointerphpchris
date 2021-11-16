<?php


session_start();

if(!empty($_POST)){
    if(in_array('',$_POST)){
        header('location:index.php?error=missingInput');
        exit();
    } else {
        $username = htmlspecialchars(trim($_POST['username']));
        $password = htmlspecialchars(trim($_POST['password']));
        $password2 = htmlspecialchars(trim($_POST['password2']));
        $email = htmlspecialchars(trim($_POST['email']));
    }
}
if (strlen($username)<3 || strlen($password)<6){
    header('location:index.php?error=inputTooShort');
    exit();
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