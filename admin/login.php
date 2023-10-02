<?php
session_start();
if (isset($_SESSION['name'])) {
    header("Location: index.php");
}
include("./model/config.php");
include("./model/actionLogin.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>

<body>
    <form action="" method="POST">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="psw" placeholder="Password" required>
        <button type="submit" name="btnlogin">Login</button>
    </form>
    <a href="./signUp.php">Signup</a>
</body>

</html>