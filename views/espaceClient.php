
        <?php include 'header.php'; ?>
    <main class="client-content">
        <section class="client-banner">
            <div class="client-presentation">
                <div class="clientTitle">
                    <h1>Espace Client</h1>
                    <hr class="separator">
                </div>
                <p class="client-slogan">Rejoignez notre espace client pour bénéficier de nos offres exclusives et suivre vos commandes en ligne.</p>
            </div>
        </section>
        <section class="client-options">
            <div class="client-option" id="connexion-section">
                <h2>Connexion</h2>
                <?php if (isset($loginerror)) : ?>
                    <p style="background-color: red; color: white;"><?php echo $loginerror; ?></p>
                <?php endif; ?>
                <form action="../controllers/loginCTRL.php" method="POST">
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe :</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit">Se connecter</button>
                    </div>
                </form>
                <p>Pas de compte ? <a href="#" id="show-register">Créer un compte</a></p>
            </div>
            <div class="client-option" id="inscription-section" style="display: none;">
                <h2>Inscription</h2>
                <?php if (isset($error)) : ?>
                    <p style="background-color: red; color: white;"><?php echo $error; ?></p>
                <?php elseif (isset($success)) : ?>
                    <p style="background-color: green; color: white;"><?php echo $success; ?></p>
                <?php endif; ?>
                <form action="../controllers/registerCTRL.php" method="POST">
                    <div class="form-group">
                        <label for="register-lastname">Nom :</label>
                        <input type="text" id="register-lastname" name="lastname" required>
                    </div>
                    <div class="form-group">
                        <label for="register-email">Email :</label>
                        <input type="email" id="register-email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="register-password">Mot de passe :</label>
                        <input type="password" id="register-password" name="password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit">S'inscrire</button>
                    </div>
                </form>
                <p>Déjà un compte ? <a href="#" id="show-login">Se connecter</a></p>
            </div>
        </section>
    </main>
    <script src="../js/scripts.js"></script>
    <?php include 'footer.php'; ?>
    