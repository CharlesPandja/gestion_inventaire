<?php
include 'header.php';
require '../config/database.php';
require '../models/Produit.php';

$produit = new Produit($pdo);
$produits = $produit->readAll();
?>

<main>
    <h2>Gestion des Produits</h2>
    <section>
        <h3>Ajouter un Produit</h3>
        <form action="../controllers/produitCTRL.php" method="post">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>
            <label for="description">Description :</label>
            <textarea id="description" name="description"></textarea>
            <label for="prix">Prix :</label>
            <input type="number" step="0.01" id="prix" name="prix" required>
            <label for="categorie_id">Catégorie :</label>
            <input type="number" id="categorie_id" name="categorie_id" required>
            <label for="stock">Stock :</label>
            <input type="number" id="stock" name="stock" required>
            <button type="submit" name="create">Ajouter</button>
        </form>
    </section>
    <section>
        <h3>Liste des Produits</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Catégorie</th>
                <th>Stock</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($produits as $produit): ?>
                <tr>
                    <td><?php echo $produit['id']; ?></td>
                    <td><?php echo $produit['nom']; ?></td>
                    <td><?php echo $produit['description']; ?></td>
                    <td><?php echo $produit['prix']; ?></td>
                    <td><?php echo $produit['categorie_id']; ?></td>
                    <td><?php echo $produit['stock']; ?></td>
                    <td>
                        <form action="../controllers/produitCTRL.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $produit['id']; ?>">
                            <button type="submit" name="delete">Supprimer</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>
</main>
<?php include 'footer.php'; ?>