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
    Votre requete a reussi.
    <?php header('Refresh: 2;formulaire.html'); ?>
  </body>
</html>