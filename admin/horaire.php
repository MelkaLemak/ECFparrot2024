<?php session_start();

// Vérifier si l'utilisateur est connecté et a le rôle 1
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 1) {
    header('Location: ../nav/espace-pro.php');
    exit();
}
$pageTitle='informations garage';
require '../templates/header.php';
require '../configuration/connexionBDD.php';?>
    
<body>



<?php
// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupére les données du formulaire
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $mail = $_POST['mail'];
    $days1 = $_POST['days1'];
    $hours1 = $_POST['hours1'];
    $days2 = $_POST['days2'];
    $hours2 = $_POST['hours2'];

    

        // mise a jour
        $query = "UPDATE office SET phone = :phone, address = :address, mail = :mail, days1 = :days1, hours1 = :hours1, days2 = :days2, hours2 = :hours2";
        $stmt = $bdd->prepare($query);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':mail', $mail);
        $stmt->bindParam(':days1', $days1);
        $stmt->bindParam(':hours1', $hours1);
        $stmt->bindParam(':days2', $days2);
        $stmt->bindParam(':hours2', $hours2);
        $stmt->execute();

        // Redirection
        header("Location: ../index.php");
        exit();
    } 
?>

<footer>
    <?php
   

    $list = "SELECT phone, address, mail, days1, days2, hours1, hours2 FROM office";

    $rs_select = $bdd->prepare($list);
    $rs_select->execute();

    $donnees = $rs_select->fetch(PDO::FETCH_ASSOC);
    ?>
    <div>
        <h5>Nos bureaux</h5>

        <!-- Formulaire pour modifier les informations -->
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="text" name="address" value="<?= $donnees['address'] ?>">
            <input type="text" name="phone" value="<?= $donnees['phone'] ?>">
            <input type="text" name="mail" value="<?= $donnees['mail'] ?>">
            <h5>Horaires d'ouverture</h5>
            <input type="text" name="days1" value="<?= $donnees['days1'] ?>">
            <input type="text" name="hours1" value="<?= $donnees['hours1'] ?>">
            <input type="text" name="days2" value="<?= $donnees['days2'] ?>">
            <input type="text" name="hours2" value="<?= $donnees['hours2'] ?>">
            <input type="submit" value="Enregistrer les modifications">
        </form>
    </div>
</footer>

<script src="../JS/app.js"></script>
</body>
</html>
