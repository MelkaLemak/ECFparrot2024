<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 1) {
  header('Location: ../nav/espace-pro.php');
  exit();
}
$pageTitle="gestion";
require '../templates/header.php';
require '../configuration/connexionBDD.php';

if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 1) {
    header('Location:../nav/espace-pro.php');
    exit();
} ?>

    <section class="features">
  <a href="ajouter-vehicules.php" class="feature">
    <h2>Ajouter Véhicules</h2>
  </a>
  <a href="horaire.php" class="feature">
    <h2>Modifier Horaires</h2>
  </a>
  <a href="ajouter-employes.php" class="feature">
    <h2>Ajouter Employés</h2>
  </a>
  <a href="modifier-services.php" class="feature">
    <h2>Modifier Services</h2>
  </a>
  <a href="../configuration/logout.php" class="feature">
    <h2>Deconnexion</h2>
  </a>
</section>

<script src="../JS/app.js"></script>
</body>
</html>