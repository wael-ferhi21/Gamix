<?php

include("config.php");


if(isset($_POST['join'])){

    $nom = $_POST['username'];
     
    $password = $_POST['password']; 
   
    $sql_user = "INSERT INTO user (id, username, password) VALUES(NULL,'$nom','$password')"; 
  
    $cnx->exec($sql_user); 
   
    header("Location: index.html");
    

}
?>