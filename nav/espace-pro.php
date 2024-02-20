<?php
session_start();
if (isset($_SESSION['user_id'])) {
    // Redirection en fonction du rôle de l'utilisateur
    if ($_SESSION['role'] == 1) {
        header('Location:../admin/gestion_admin.php');
        exit();
    } elseif ($_SESSION['role'] == 2) {
        header('Location:../admin/gestion_user.php');
        exit();
    }
}
$pageTitle = "Espace Pro";
require '../templates/header.php';
?>

// Vérifier si l'utilisateur est déjà connecté

   

<!-- Login Form -->
<div class="contact-form">
    <h2>Connexion</h2>
    <p>Connectez-vous pour accéder à votre espace professionnel.</p>
    <form action="../configuration/login.php" method="post">
      <div class="form-group">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="user" name="user" required />
      </div>
      <div class="form-group">
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required />
      </div>
      <button type="submit">Se connecter</button>
    </form>
  </div>
  
  
    
    <script src="../JS/app.js"></script>
  </body>
</html>
