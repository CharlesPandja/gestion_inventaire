<?php
// Contrôleur pour la gestion des produits

require '../config/database.php';
require '../models/Produit.php';

$produit = new Produit($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['create'])) {
        $nom = $_POST['nom'];
        $description = $_POST['description'];
        $prix = $_POST['prix'];
        $categorie_id = $_POST['categorie_id'];
        $stock = $_POST['stock'];
        $produit->create($nom, $description, $prix, $categorie_id, $stock);
    } elseif (isset($_POST['update'])) {
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $description = $_POST['description'];
        $prix = $_POST['prix'];
        $categorie_id = $_POST['categorie_id'];
        $stock = $_POST['stock'];
        $produit->update($id, $nom, $description, $prix, $categorie_id, $stock);
    } elseif (isset($_POST['delete'])) {
        $id = $_POST['id'];
        $produit->delete($id);
    }
    header('Location: ../views/gestionProduits.php');
}
?>