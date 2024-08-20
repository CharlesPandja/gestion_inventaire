<?php
// Modèle de la table Categories

class Categorie {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function create($nom) {
        $stmt = $this->pdo->prepare("INSERT INTO categories (nom) VALUES (?)");
        return $stmt->execute([$nom]);
    }

    public function readAll() {
        $stmt = $this->pdo->query("SELECT * FROM categories");
        return $stmt->fetchAll();
    }

    public function update($id, $nom) {
        $stmt = $this->pdo->prepare("UPDATE categories SET nom = ? WHERE id = ?");
        return $stmt->execute([$nom, $id]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM categories WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>