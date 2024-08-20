<?php
include 'header.php';
require '../config/database.php';
require '../models/Commande.php';
require '../models/CommandeProduit.php';

$commande = new Commande($pdo);
$commandes = $commande->readAll();
$commandeProduit = new CommandeProduit($pdo);
?>

<main>
    <h2>Gestion des Commandes</h2>
    <section>
        <h3>Ajouter une Commande</h3>
        <form action="../controllers/commandeCTRL.php" method="post">
            <label for="utilisateur_id">ID Utilisateur :</label>
            <input type="number" id="utilisateur_id" name="utilisateur_id" required>
            <label for="statut">Statut :</label>
            <input type="text" id="statut" name="statut" required>
            <label for="produits">Produits :</label>
            <textarea id="produits" name="produits"></textarea>
            <button type="submit" name="create">Ajouter</button>
        </form>
    </section>
    <section>
        <h3>Liste des Commandes</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>ID Utilisateur</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($commandes as $commande): ?>
                <tr>
                    <td><?php echo $commande['id']; ?></td>
                    <td><?php echo $commande['utilisateur_id']; ?></td>
                    <td><?php echo $commande['statut']; ?></td>
                    <td>
                        <form action="../controllers/commandeCTRL.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $commande['id']; ?>">
                            <button type="submit" name="delete">Supprimer</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>
</main>
<?php include 'footer.php'; ?>