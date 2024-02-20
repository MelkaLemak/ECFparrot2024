<?php
// Démarrez la session
session_start();

// Détruire toutes les variables de session
$_SESSION = array();

// Si la session est active, détruisez-la
if (session_status() === PHP_SESSION_ACTIVE) {
    session_destroy();
}

// Rediriger vers la page d'accueil ou une autre page après la déconnexion
header('Location: ../index.php'); // Remplacez index.php par la page souhaitée
exit();
?>
