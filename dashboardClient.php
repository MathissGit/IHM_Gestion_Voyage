<?php
session_start();

if(isset($_SESSION['role']) && $_SESSION['role'] === '2'){
    echo "Bienvenue dans le tableau de bord du client !";
} else {
    header('Location: connexion.php');
    exit();
}
?>
<!-- Exemple de bouton Bootstrap pour la déconnexion -->
<!-- Formulaire avec un bouton pour la déconnexion -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page de Connexion</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <form method="post" action="deconnexion.php">
    <button type="submit" class="btn btn-danger">Déconnexion</button>
    </form>
</body>
</html>

