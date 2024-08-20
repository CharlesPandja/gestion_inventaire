<?php
// Contrôleur pour l'inscription des utilisateurs

require '../config/database.php';
require '../models/Utilisateur.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['lastname'];
    $email = $_POST['email'];
    $mot_de_passe = $_POST['password'];

    $utilisateur = new Utilisateur($pdo);
    if ($utilisateur->register($nom, $email, $mot_de_passe)) {
        $success = "Inscription réussie. Vous pouvez vous connecter.";
        header('Location: ../views/espaceClient.php');
    } else {
        $error = "Erreur lors de l'inscription. Veuillez réessayer.";
        header('Location: ../views/espaceClient.php');
    }
}
?>