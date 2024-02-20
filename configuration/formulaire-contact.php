<?php
$pageTitle="contact occasions";
require '../templates/header.php';
require '../configuration/connexionBDD.php';
?>


    <!-- Formulaires de contact -->
    <div class="contact-form">
      <h2>Contactez-nous</h2>
      <p>laisez nous un message afin que nous vous renseignons sur la voiture de votre choix </p>
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
