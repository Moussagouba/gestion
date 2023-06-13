<?php

$serveur = 'localhost';
$user = 'root';
$password= '';

try{
    $cnp = new PDO("mysql:host=$serveur;dbname=gestion", $user , $password);
    $cnp->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $error){
    echo ' Echec de connection à la base de donnée : ' .$error->getMessage();
}
?>