<?php
function connect()
{
    $server="localhost";
    $database="projet";
    $username="root";
    $password="";

    try{
    $connexion =new PDO("mysql:host=$server;dbname=$database",$username,$password);
    return $connexion;
     
    }catch(PDOExeption $e){
        die('erreur : ' .$e->getMessage());
        
    }

}

?>