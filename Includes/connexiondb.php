<?php

function connectdb(){
$serveur = "localhost";
$user = "root";
$password = "root";
$bdd = "MotoGP";

try{
    $con = new PDO("mysql:host=".$serveur.';dbname='.$bdd, $user, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $con;

}catch(PDOException $error){
    echo 'N°'.$error->getCode().'<br/>';
    die('Erreur : '. $error->getMessage().'<br/>');
}}
?>