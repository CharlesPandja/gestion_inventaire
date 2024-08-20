<?php
// Modèle de la table Commande_Produits

class CommandeProduit {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function addProductToCommande($commande_id, $produit_id, $quantite) {
        $stmt = $this->pdo->prepare("INSERT INTO commande_produits (commande_id, produit_id, quantite) VALUES (?, ?, ?)");
        return $stmt->execute([$commande_id, $produit_id, $quantite]);
    }

    public function getProductsByCommande($commande_id) {
        $stmt = $this->pdo->prepare("SELECT * FROM commande_produits WHERE commande_id = ?");
        $stmt->execute([$commande_id]);
        return $stmt->fetchAll();
    }
}
?>