<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 2) { 
    header('Location: espace-pro.php');
    exit();
};
$pageTitle="gestion";
require '../templates/header.php';
require '../configuration/connexionBDD.php';
?>


    <section class="features">
        <a href="ajouter-vehicules.php" class="feature">
            <h2>Ajouter Véhicules</h2>
        </a>
        <a href="validOpinion.php" class="feature">
            <h2>avis Clients</h2>
        </a>
        <a href="../configuration/logout.php" class="feature">
            <h2>Deconnexion</h2>
        </a>
    </section>

    <footer><?php require '../templates/footer.php';?></footer>
    <script src="../JS/app.js"></script>
</body>
</html>
