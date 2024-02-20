<?php
$pageTitle="Votre Avis";
require '../templates/header.php';
require '../configuration/connexionBDD.php'; ?>

    <!-- Contact Form -->
    <div class="contact-form">
      <h2>Donnez nous Votre Avis</h2>
      <form action="../configuration/get_opinion.php" method="post">
        <div class="form-group">
          <label for="name">Nom :</label>
          <input type="text" id="name" name="name" required />
        </div>
        <div class="form-group">
        <label for="firstname">Prenom :</label>
          <input type="text" id="firstname" name="firstname" required />
        </div>
        
        <div class="form-group">
          <label for="message">Message :</label>
          <textarea id="message" name="message" required></textarea>
        </div>
        <button type="submit">Envoyer</button>
      </form>
    </div>
    <section class="validated-avis">
        <h2>Avis de Clients</h2>
        <ul class="avis-list">
            <!-- PHP code to fetch and display validated avis goes here -->
            <?php
                $stmt = $bdd->query("SELECT * FROM `avis` WHERE `statut` = 1");
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<li>";
                    echo "<strong>Nom:</strong> " . $row['name'] . " " . $row['firstname'] . "<br>";
                    echo "<strong>Message:</strong> " . $row['message'] . "<br>";
                    echo "</li>";
                }
            
            ?>
        </ul>
    </section>
    <footer>
      <?php require '../templates/footer.php' ?>
    </footer>
    <script src="../JS/app.js"></script>
  </body>
</html>
