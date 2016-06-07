<?php 
require('param.inc.php');

  extract($_POST);
  if (isset($nom) && isset($prenom) && isset($email) && isset($bureau)) {
    $stmt = $connexion->prepare("INSERT INTO enseignant (nom, prenom, email, bureau) VALUES (:nom, :prenom, :email, :bureau)");
    $stmt->bindValue(':nom', $nom, PDO::PARAM_STR);
    $stmt->bindValue(':prenom', $prenom, PDO::PARAM_STR);
    $stmt->bindValue(':email', $email, PDO::PARAM_STR);
    $stmt->bindValue(':bureau', $bureau, PDO::PARAM_STR);
    $stmt->execute();
  }
?>

<!DOCTYPE html>
<html lang="fr">
  <meta charset= "utf-8" />
  <head>
    <title>REMPLIR.PHP</title>
  </head>
  <body>
    <h1>
      Ajouter un enseignant
    </h1>
    <form method="post" action="remplir.php" >
      <table>
     <tr><td><label>Nom:</label></td><td><input type="text" name="nom" required/></td></tr>
    <tr><td><label>Prenom: </label></td><td><input type="text" name="prenom" required/></td></tr>
    <tr><td><label>Adresse e-mail: </label></td><td><input type="mail" name="email" required/></td></tr>
        <tr><td><label>Numero du bureau: </label></td><td><input type="text" name="bureau" required/></td></tr>
    <tr><td></td><td><input type="submit" value="Ajouter"/></td></tr>
      </table>
    </form>
  </body>
</html>