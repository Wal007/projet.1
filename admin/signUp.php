<?php
session_start();
if (isset($_SESSION['name'])) {
    header("Location: index.php");
}
include("./model/config.php");
include("./model/actionSignup.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="name" id="" placeholder="Name" required>
        <input type="email" name="email" id="" placeholder="Email" required>
        <input type="email" name="confMail" id="" placeholder="Confirmation email" required>
        <input type="password" name="psw" id="" placeholder="Password" required>
        <input type="text" name="phone" id="" placeholder="Phone" required>
        <button type="submit " name="btnSignUp">Sign Up</button>
    </form>
    <a href="./login.php"></a>
</body>

</html>