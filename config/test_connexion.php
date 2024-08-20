<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "gestion_inventaire";

try {
    // Création d'une connexion à la base de données avec PDO
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // Configuration pour afficher les erreurs PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Connexion à la base de données MySQL réussie !";
    
} catch(PDOException $e) {
    // En cas d'erreur de connexion, afficher l'erreur
    die("La connexion à la base de données a échoué : " . $e->getMessage());
}

?>