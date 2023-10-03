<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
  extract($_POST);
  $sql = "SELECT * FROM admin WHERE email = ?";
  $req = $connexion->prepare($sql);
  $req->execute([$email]);
  if($req->rowCount() > 0) {
    $user = $req->fetch();
    if(password_verify($psw, $user['psw'])) {
      $_SESSION["name"] = $user['name'];

      header("Location: index.php");
    } else {
      $error = "Mauvais mots de passe ";
    }
  } else {
    $error = "ce compte n'éxiste pas!";
  }
  $req->closeCursor();
}

?>