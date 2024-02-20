<?php
session_start();

// Vérifier si l'utilisateur est connecté et a le rôle 1
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 1) {
    header('Location: ../nav/espace-pro.php');
    exit();
}

// Vérifier si le formulaire a été soumis et si l'identifiant du service à supprimer est présent
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['service_id'])) {
    // Inclure le fichier de connexion à la base de données
    require 'connexionBDD.php';

    // Récupérer l'identifiant du service à supprimer
    $service_id = $_POST['service_id'];

    // Préparer et exécuter la requête de suppression
    $query = "DELETE FROM services WHERE id = :service_id";
    $stmt = $bdd->prepare($query);
    $stmt->bindParam(':service_id', $service_id);
    $stmt->execute();

    // Redirection vers la page des services après la suppression
    header("Location: ../nav/services.php");
    exit();
} else {
    // Redirection vers une page d'erreur si l'identifiant du service à supprimer n'est pas spécifié
    header("Location: erreur.php");
    exit();
}
?>
