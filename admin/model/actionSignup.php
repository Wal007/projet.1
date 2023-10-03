<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  extract($_POST);
  $password = password_hash($psw, PASSWORD_DEFAULT);
  $sql = "INSERT INTO admin (name, email, psw, phone) VALUES (?, ?, ?, ?)";
  $req = $connexion->prepare($sql);
  $req->execute([$name, $email, $password, $phone]);
  if($req == TRUE){
    $success = "compte crée avec succes";
    header("location: login.php");
  }
  else{
    $error = "conpte invalide";
  }
  $req->closeCursor();
}
?>