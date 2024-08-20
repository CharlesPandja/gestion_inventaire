<?php
// Modèle de la table Commandes

class Commande {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function create($utilisateur_id, $statut) {
        $stmt = $this->pdo->prepare("INSERT INTO commandes (utilisateur_id, statut) VALUES (?, ?)");
        return $stmt->execute([$utilisateur_id, $statut]);
    }

    public function readAll() {
        $stmt = $this->pdo->query("SELECT * FROM commandes");
        return $stmt->fetchAll();
    }

    public function update($id, $statut) {
        $stmt = $this->pdo->prepare("UPDATE commandes SET statut = ? WHERE id = ?");
        return $stmt->execute([$statut, $id]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM commandes WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>