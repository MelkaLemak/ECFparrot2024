<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérification de l'existence de l'identifiant du véhicule à supprimer
    if(isset($_POST['id']) && !empty($_POST['id'])) {
        require '../configuration/connexionBDD.php';

        // Préparation de la requête de suppression
        $query = "DELETE FROM vehicules WHERE id = :id";
        $stmt = $bdd->prepare($query);

        
        $stmt->bindParam(':id', $_POST['id']);

        try {
            // Exécution de la requête de suppression
            $stmt->execute();

            // Redirection vers la page précédente après la suppression
            header("Location: " . $_SERVER["HTTP_REFERER"]);
            exit();
        } catch (PDOException $e) {
            // En cas d'erreur, affichage du message d'erreur
            echo "Erreur lors de la suppression du véhicule : " . $e->getMessage();
        }
    } else {
        // Si l'identifiant du véhicule n'est pas défini, affichage d'un message d'erreur
        echo "Identifiant du véhicule non spécifié.";
    }
} else {
    
    echo "Méthode de requête non autorisée.";
}
?>
