<?php
$pageTitle="Services";
require '../templates/header.php';
require '../configuration/connexionBDD.php';
?>
    
<div class="service-cards">
<?php

    //récupération des informations
    $query = "SELECT nom, cout, description FROM services";
    $result = $bdd->query($query);

    // Affichage des services
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<div class='card'>";
        echo "<h3>" . $row['nom'] . "</h3>";
        echo "<p><strong>Cout :</strong> €" . $row['cout'] . "</p>";
        echo "<p>" . $row['description'] . "</p>";
        echo "</div>";
    }

?>

</div>


    <!-- Formulaires de contact -->
    <div class="contact-form">
      <h2>Contactez-nous</h2>
      <p>laisez nous un message afin que nous vous recontactions dans les plus brefs delai pour vous proposer un rendez vous et un tarif </p>
      <form action="../configuration/sendform.php" method="post">
        <div class="form-group">
          <label for="name">Nom :</label>
          <input type="text" id="name" name="name" required />
        </div>
        <div class="form-group">
          <label for="email">E-mail :</label>
          <input type="email" id="mail" name="mail" pattern="[^ @]*@[^ @]*" required />
        </div>
        <div class="form-group">
          <label for="service">Type de service :</label>
          <select id="subject" name="subject" required>
            <option value="vidange">Vidange</option>
            <option value="climatisation">Climatisation</option>
            <option value="carrosserie">Carrosserie</option>
          </select>
        </div>
        <div class="form-group">
          <label for="message">Message :</label>
          <textarea id="message" name="message" required></textarea>
        </div>
        <button type="submit">Envoyer</button>
      </form>
    </div>
    <footer>
      <?php require '../templates/footer.php' ?>
    </footer>
    <script src="../JS/app.js"></script>
  </body>
</html>
