<?php
// Fichier de configuration pour la connexion à la base de données

$host = 'localhost';
$dbname = 'gestion_inventaire';
$username = 'root';
$password = '';
$pdo = null;

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>