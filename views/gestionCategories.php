<?php
include 'header.php';
require '../config/database.php';
require '../models/Categorie.php';

$categorie = new Categorie($pdo);
$categories = $categorie->readAll();
?>

<main>
    <h2>Gestion des Catégories</h2>
    <section>
        <h3>Ajouter une Catégorie</h3>
        <form action="../controllers/categorieCTRL.php" method="post">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>
            <button type="submit" name="create">Ajouter</button>
        </form>
    </section>
    <section>
        <h3>Liste des Catégories</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($categories as $categorie): ?>
                <tr>
                    <td><?php echo $categorie['id']; ?></td>
                    <td><?php echo $categorie['nom']; ?></td>
                    <td>
                        <form action="../controllers/categorieCTRL.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $categorie['id']; ?>">
                            <button type="submit" name="delete">Supprimer</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>
</main>
<?php include 'footer.php'; ?>