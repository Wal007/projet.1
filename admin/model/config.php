<?php 
    $error = "";
    $host = "localhost";
    $dbname = "projet1";
    $username = "root";
    $password = "";
    $dns = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

    try{
        $connexion = new PDO($dns,$username,$password);
        $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        echo "Erreur de la connexion à la base de données : " .$e->getMessage();
    }

?>     