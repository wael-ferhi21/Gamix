<?php
 include "config.php";
    $id = $_GET['id'];
    $sqlState = $cnx->prepare('DELETE FROM product WHERE id=?');
    $supprime = $sqlState->execute([$id]);
    header('location: products_list.php');