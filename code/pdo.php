<?php

 
//connexion à la base de donnée

require ("connect.php");

try{
    $pdo = new PDO('mysql:host='.SERVEUR.';dbname='.BASE, USER,PASSWORD,
    array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

}catch(PDOExection $e){
    echo "Echec de la connexion : %s\n" .$e->getMessage();
    exit();
}

?>