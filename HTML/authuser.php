<?php
session_start(); 

include "config.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username)) {
        header("Location: index.html?error=Username is required");
        exit();
    } elseif (empty($password)) {
        header("Location: index.html?error=Password is required");
        exit();
    } else {
       
        $res = $cnx->prepare("SELECT * FROM user WHERE username=? AND password=?");
        $res->execute([$username, $password]);
        $user = $res->fetch();

        if ($user) {
            
            $_SESSION['username'] = $username;
            header("Location: home.php?success=Login successful");
            exit();
        } else {
          
            header("Location: index.php?error=Invalid username or password");
            exit();
        }
    }
}
?>
