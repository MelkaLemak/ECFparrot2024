<?php 
session_start();

// Vérifie role utilisateur
if (!isset($_SESSION['user_id']) || ($_SESSION['role'] != 1 && $_SESSION['role'] != 2)) {
    header('Location: ../nav/espace-pro.php');
    exit();
}
$pageTitle="Ajout Vehicule";
require '../templates/header.php';
require '../configuration/connexionBDD.php';
?>

    <body>
    <div class="contact-form">
        <h2>Ajouter un véhicule</h2>
        <form method="post" action="ajouter_voiture.php">
        
            <div class="form-group">
        <label for="image">Image :</label>
        <input type="text" id="image" name="image" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="prix">Prix :</label>
        <input type="number" id="prix" name="prix" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="kilometrage">Kilométrage :</label>
        <input type="number" id="kilometrage" name="kilometrage" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="annee">Année :</label>
        <input type="number" id="annee" name="annee" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="type_energie">Type d'énergie :</label>
        <input type="text" id="type_energie" name="type_energie" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="description">Description :</label>
        <textarea id="description" name="description" class="form-control" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter le véhicule</button>
    </div>
    <div class="vehicle-cards">
    <?php
        // récupération les info véhicules
        $query = "SELECT id, image, prix, kilometrage, type_energie, annee, description FROM vehicules";
        $result = $bdd->query($query);

        // Affichage des cartes pour chaque véhicule
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "<div class='vehicle-card cars-filter' data-kilometer='" . $row['kilometrage'] . "' data-price='" . $row['prix'] . "' data-year='" . $row['annee'] . "'>";
            echo "<img src='" . $row['image'] . "' alt=''>";
            echo "<p><strong>Prix :</strong> $" . $row['prix'] . "</p>";
            echo "<p><strong>Kilométrage :</strong> " . $row['kilometrage'] . " km</p>";
            echo "<p><strong>Type d'énergie :</strong> " . $row['type_energie'] . "</p>";
            echo "<p><strong>Année :</strong> " . $row['annee'] . "</p>";
            echo "<p>" . $row['description'] . "</p>";
            echo "<form method='post' action='supprimer_vehicule.php'>";
            echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
            echo "<button type='submit' class='btn btn-danger'>Supprimer</button>";
            echo "</form>";
            echo "</div>";
        }
    ?>
</div>
    <footer><?php require '../templates/footer.php' ?></footer>
        <script src="../JS/app.js"></script>
    </body>
</html>
