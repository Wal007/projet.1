<?php 
session_start();
if(!isset($_SESSION['name'])){
    header("Location: login.php");
} else {
    $name = $_SESSION['name'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> admin sera appareil</title>
</head>

<body>
    <aside>
        <div class="logo">Logo</div>
        <nav>
            <a href="./index.php">Dashboard</a>
            <a href="./addArticle.php">Ajout article</a>
            <a href="./viewArticle.php">Voir article</a>
            <a href="./logout.php">Se deconecte</a>
        </nav>
    </aside>
    <main>
        <header>
            <div class="txt_header">Vous etes connecté en tant que: <?= $name ?> </div>
            <div class="logo_header">ICON</div>
        </header>