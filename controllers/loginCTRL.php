<?php
// Contrôleur pour la connexion des utilisateurs

session_start();
require '../config/database.php';
require '../models/Utilisateur.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $mot_de_passe = $_POST['password'];

    $utilisateur = new Utilisateur($pdo);
    $user = $utilisateur->login($email, $mot_de_passe);

    if ($user) {
        $_SESSION['user_id'] = $user['id'];
        header('Location: ../views/gestionProduits.php');
    } else {
        $loginerror = "Email ou mot de passe incorrect.";
        header('Location: ../views/espaceClient.php');
    }
}
?>