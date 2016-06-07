$stmt = $pdo->prepare("INSERT INTO enseignant (nom, prenom, email, bureau) VALUES (:nom, :prenom, :email, :bureau)");
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':bureau', $bureau);
