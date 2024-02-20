<?php 
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 1) {
    header('Location: ../nav/espace-pro.php');
    exit();
  }

$pageTitle='Ajout Employes';
require '../templates/header.php';
require '../configuration/connexionBDD.php';

// Vérification formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $user = $_POST['user'];
    $password = $_POST['password'];

    // Hachage du mot de passe avec BCRYPT
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Préparation de la requête SQL pour insérer l'utilisateur avec le rôle 2
    $sql = "INSERT INTO `secure` (`user`, `password`, `role`) VALUES (?, ?, 2)";
    $stmt = $bdd->prepare($sql);
    
    // Exécution de la requête avec les données du formulaire
    if ($stmt->execute([$user, $hashedPassword])) {
        echo "<p style='text-align: center; color: green;'>L'utilisateur a été ajouté avec succès.</p>";
    } else {
        echo "<p style='text-align: center; color: red;'>Une erreur est survenue lors de l'ajout de l'utilisateur.</p>";
    }
}
?>

<div class="contact-form">
    <h2>Ajouter Employés</h2>
    <form action="" method="post">
        <div class="form-group">
            <label for="user">Nom d'utilisateur :</label>
            <input type="text" id="user" name="user" required />
        </div>
        <div class="form-group">
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required />
        </div>
        <button type="submit">Ajouter Employé</button>
    </form>
</div>
<footer><?php require '../templates/footer.php' ?></footer>
<script src="../JS/app.js"></script>
</body>
</html>
