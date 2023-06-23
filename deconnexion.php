<?php
session_start();
// Réinitialiser et détruire la session
$_SESSION = array(); // Supprimer toutes les variables de session
session_destroy(); // Détruire complètement la session

// Redirection vers une autre page après la déconnexion
header('Location: connexion.php');
exit();
?>
