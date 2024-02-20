<?php try {
      $bdd = new PDO('mysql:host=localhost;dbname=ecf;charset=utf8', 'root', '');
      // Définir le mode d'erreur de PDO sur Exception
      $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (Exception $e) {
      die('Une erreur est survenue : ' . $e->getMessage());
  } 