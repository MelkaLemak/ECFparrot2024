<?php
session_start();

// Vérifier si l'utilisateur est connecté et a le rôle 1
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 1) {
    header('Location: ../nav/espace-pro.php');
    exit();
}
$pageTitle="ajout Service";
require '../templates/header.php';
require '../configuration/connexionBDD.php';
?>


<!-- Formulaire pour ajouter un nouveau service -->
<div class="contact-form">
<form method="post" action="<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupére données du formulaire
    $nom = $_POST['nom'];
    $cout = $_POST['cout'];
    $description = $_POST['description'];

    

        
        $query = "INSERT INTO services (nom, cout, description) VALUES (:nom, :cout, :description)";
        $stmt = $bdd->prepare($query);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':cout', $cout);
        $stmt->bindParam(':description', $description);
        $stmt->execute();

        // Redirection
        header("Location: ../nav/services.php");
        exit();
    }

?>">
   
    <div class="form-group">
        <label for="nom">Nom du service :</label>
        <input type="text" id="nom" name="nom" required />
    </div>
    <div class="form-group">
        <label for="cout">Coût du service :</label>
        <input type="number" id="cout" name="cout" step="0.01" required />
    </div>
    <div class="form-group">
        <label for="description">Description du service :</label>
        <textarea id="description" name="description" required></textarea>
    </div>
    <button type="submit">Ajouter le service</button>
</form>
</div>

<div class="service-list">
    <h2>Services existants</h2>
    <?php
    
    $query = "SELECT id, nom, cout, description FROM services";
    $result = $bdd->query($query);

    // Affichage des services
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<div class='service'>";
        echo "<h3>" . $row['nom'] . "</h3>";
        echo "<p><strong>Coût :</strong> €" . $row['cout'] . "</p>";
        echo "<p>" . $row['description'] . "</p>";
        // Formulaire pour supprimer le service
        echo "<form method='post' action='supprimer_service.php'>";
        echo "<input type='hidden' name='service_id' value='" . $row['id'] . "' />";
        echo "<button type='submit'>Supprimer</button>";
        echo "</form>";
        echo "</div>";
    }
    ?>
<footer><?php require '../templates/footer.php' ?></footer>
<script src="../JS/app.js"></script>
</body>
</html>
