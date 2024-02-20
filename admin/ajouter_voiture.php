<?php
require '../configuration/connexionBDD.php';
            // Vérification soumission formulaire
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Récupération données formulaire
                $image = $_POST['image'];
                $prix = $_POST['prix'];
                $kilometrage = $_POST['kilometrage'];
                $type_energie = $_POST['type_energie'];
                $annee = $_POST['annee'];
                $description = $_POST['description'];

                

                    //insertion
                    $query = "INSERT INTO vehicules (image, prix, kilometrage, type_energie, annee, description) VALUES (:image, :prix, :kilometrage, :type_energie, :annee, :description)";
                    $stmt = $bdd->prepare($query);
                    $stmt->bindParam(':image', $image);
                    $stmt->bindParam(':prix', $prix);
                    $stmt->bindParam(':kilometrage', $kilometrage);
                    $stmt->bindParam(':type_energie', $type_energie);
                    $stmt->bindParam(':annee', $annee);
                    $stmt->bindParam(':description', $description);
                    $stmt->execute();

                    // Redirection 
                    header("Location: ../nav/occasions.php");
                    exit();
                } 
            
        ?>