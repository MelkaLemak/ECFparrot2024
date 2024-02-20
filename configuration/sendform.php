<?php
    
      // Vérification du remplissage des champs
      if (isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['subject']) && isset($_POST['message'])) {

        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['mail']);
        $subject = htmlspecialchars($_POST['subject']);
        $message = htmlspecialchars($_POST['message']);
      
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

          // Échappement des caractères spéciaux pour l'affichage dans le mail
          $name = preg_replace('/[^A-Za-z0-9\-éèà ]/', '', $name);
          $subject = preg_replace('/[^A-Za-z0-9\-éèà ]/', '', $subject);

          $return = false;

          if (isset($_POST['title'])) {
            $return = mail('zaanane.k@gmail.com', 'Envoi depuis la page '.$_POST['title'], 
            'Nom : '.$name.', '.'Adresse mail : '.$email.', '.'Sujet : '.$subject.', '.'Message : '.$message);
          } else {
            $return = mail('zaanane.k@gmail.com', 'Envoi depuis la page Contact', 
            'Nom : '.$name.', '.'Adresse mail : '.$email.', '.'Sujet : '.$subject.', '.'Message : '.$message);
          }

          if ($return) {
            echo '<h4>Votre message a bien été envoyé.</h4>
            <h4>Veuillez patienter un instant !</h4>
            <h4>Redirection en cours...</h4>
            
            <script>
            function redirectToPreviousPage() {
                history.back();
            }
            setTimeout(redirectToPreviousPage, 5000);
            </script>';
          } else {
            echo '<h4 style="color: red">Erreur lors de l\'envoi du message.</h4>';
          }
        }
      }
    ?>
