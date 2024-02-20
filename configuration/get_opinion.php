<?php
require 'connexionBDD.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $firstname = $_POST['firstname'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `avis` (`name`, `firstname`, `message`, `statut`) VALUES (?, ?, ?, ?)";
    $stmt = $bdd->prepare($sql);
    
    $statut = 0;

    if ($stmt->execute([$name, $firstname, $message, $statut])) {
        echo "<div style='background-color: black; color: green; text-align: center; padding: 20px;'>";
        echo "<p>Votre avis a bien été pris en compte et sera publié après modération.</p>";
        echo "</div>";
        echo "<script>setTimeout(function() { window.location.href = 'index.php'; }, 5000);</script>";
        exit; 
    } else {
        echo "<p style='text-align: center; color: red;'>Une erreur est survenue lors de l'enregistrement de votre avis.</p>";
    }
}
?>
