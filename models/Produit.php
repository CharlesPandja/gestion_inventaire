<?php
// Modèle de la table Produits

class Produit {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function create($nom, $description, $prix, $categorie_id, $stock) {
        $stmt = $this->pdo->prepare("INSERT INTO produits (nom, description, prix, categorie_id, stock) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$nom, $description, $prix, $categorie_id, $stock]);
    }

    public function readAll() {
        $stmt = $this->pdo->query("SELECT * FROM produits");
        return $stmt->fetchAll();
    }

    public function update($id, $nom, $description, $prix, $categorie_id, $stock) {
        $stmt = $this->pdo->prepare("UPDATE produits SET nom = ?, description = ?, prix = ?, categorie_id = ?, stock = ? WHERE id = ?");
        return $stmt->execute([$nom, $description, $prix, $categorie_id, $stock, $id]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM produits WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>