<?php
session_start();
if(isset($_SESSION['role']) && $_SESSION['role'] === '1'){
    echo "Bienvenue dans le tableau de bord de l'administrateur !";
} else {
    header('Location: connexion.php');
    exit();
}
?>
