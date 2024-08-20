<?php
// Contrôleur pour la gestion des commandes

require '../config/database.php';
require '../models/Commande.php';
require '../models/CommandeProduit.php';

$commande = new Commande($pdo);
$commandeProduit = new CommandeProduit($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['create'])) {
        $utilisateur_id = $_POST['utilisateur_id'];
        $statut = $_POST['statut'];
        $commande_id = $commande->create($utilisateur_id, $statut);

        foreach ($_POST['produits'] as $produit) {
            $commandeProduit->addProductToCommande($commande_id, $produit['id'], $produit['quantite']);
        }
    } elseif (isset($_POST['update'])) {
        $id = $_POST['id'];
        $statut = $_POST['statut'];
        $commande->update($id, $statut);
    } elseif (isset($_POST['delete'])) {
        $id = $_POST['id'];
        $commande->delete($id);
    }
    header('Location: ../views/gestionCommandes.php');
}
?>