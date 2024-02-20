<?php
session_start();

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si les champs user et password ont été remplis
    if (!empty($_POST['user']) && !empty($_POST['password'])) {
        // Connexion à la base de données
        require 'connexionBDD.php';

        // Filtrer et sécuriser les données du formulaire
        $user = htmlspecialchars($_POST['user']);
        $password = htmlspecialchars($_POST['password']);

        // Récupérer l'utilisateur de la base de données
        $query = $bdd->prepare('SELECT id, user, password, role FROM secure WHERE user = ?');
        $query->execute([$user]);
        $user_data = $query->fetch(PDO::FETCH_ASSOC);

        // Vérifier si l'utilisateur existe dans la base de données et si le mot de passe correspond
        if ($user_data && password_verify($password, $user_data['password'])) {
            // Authentification réussie, enregistrer les informations de l'utilisateur dans la session
            $_SESSION['user_id'] = $user_data['id'];
            $_SESSION['user'] = $user_data['user'];
            $_SESSION['role'] = $user_data['role'];

            // Redirection en fonction du rôle de l'utilisateur
            if ($user_data['role'] == 1) {
                header('Location: ../admin/gestion_admin.php');
                exit();
            } elseif ($user_data['role'] == 2) {
                header('Location: ../admin/gestion_user.php');
                exit();
            }
        } else {
            // Identifiants incorrects, rediriger avec un message d'erreur
            header('Location: login.php?error=invalid_credentials');
            exit();
        }
    } else {
        // Les champs n'ont pas été correctement remplis, rediriger avec un message d'erreur
        header('Location: login.php?error=missing_fields');
        exit();
    }
}
?>
