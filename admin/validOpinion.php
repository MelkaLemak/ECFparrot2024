<?php
session_start();

// Vérifier si l'utilisateur est connecté et a le rôle 1
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 2) {
    header('Location: ../nav/espace-pro.php');
    exit();
}
$pageTitle="validation opinions";
require '../templates/header.php';
require '../configuration/connexionBDD.php';

// Vérification si une action de validation ou de suppression est demandée
if(isset($_GET['action']) && isset($_GET['id'])) {
    $id = $_GET['id'];
    
    
    if($_GET['action'] == 'valider') {
        $sql = "UPDATE `avis` SET `statut` = 1 WHERE `id` = ?";
        $stmt = $bdd->prepare($sql);
        if ($stmt->execute([$id])) {
            echo "<p style='text-align: center; color: green;'>L'avis a été validé et publié avec succès.</p>";
        } else {
            echo "<p style='text-align: center; color: red;'>Une erreur est survenue lors de la validation de l'avis.</p>";
        }
    }
    elseif($_GET['action'] == 'supprimer') {
        $sql = "DELETE FROM `avis` WHERE `id` = ?";
        $stmt = $bdd->prepare($sql);
        if ($stmt->execute([$id])) {
            echo "<p style='text-align: center; color: green;'>L'avis a été supprimé avec succès.</p>";
        } else {
            echo "<p style='text-align: center; color: red;'>Une erreur est survenue lors de la suppression de l'avis.</p>";
        }
    }
}

echo "<h2>Liste des avis en attente de validation ou de suppression :</h2>";
echo "<ul>";
$stmt = $bdd->query("SELECT * FROM `avis` WHERE `statut` = 0");
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<li style='background-color: #6f6f6fd0; border-radius: 10px; color: white; padding: 10px; margin-bottom: 10px;'>";
    echo "<strong>Nom:</strong> " . $row['name'] . " " . $row['firstname'] . "<br>";
    echo "<strong>Message:</strong> " . $row['message'] . "<br>";
    echo "<a href='?action=valider&id=" . $row['id'] . "' style='color: white;'>Valider cet avis</a> | ";
    echo "<a href='?action=supprimer&id=" . $row['id'] . "' style='color: red;'>Supprimer cet avis</a>";
    echo "</li>";
}
echo "</ul>";
?>
<footer><?php require '../templates/footer.php'?></footer>
    <script src="../JS/app.js"></script>
</body>
</html>
