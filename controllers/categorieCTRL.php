<?php
// Contrôleur pour la gestion des catégories

require '../config/database.php';
require '../models/Categorie.php';

$categorie = new Categorie($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['create'])) {
        $nom = $_POST['nom'];
        $categorie->create($nom);
    } elseif (isset($_POST['update'])) {
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $categorie->update($id, $nom);
    } elseif (isset($_POST['delete'])) {
        $id = $_POST['id'];
        $categorie->delete($id);
    }
    header('Location: ../views/gestionCategories.php');
}
?>