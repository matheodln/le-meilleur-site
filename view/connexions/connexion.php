<div class="white-square">
    <div class="container">
        <a href="<?php echo BASE_URL.'/voyageur/connexions/inscription' ?>">
            <div class="box2">
                <h2>Créer un compte</h2>
            </div>
        </a>
        <div class="line"></div>
        <a href="<?php echo BASE_URL.'/connexions/connexion' ?>">
            <div class="box">
                <h2>Se connecter</h2>
            </div>
        </a>
    </div>
    <div class="horizontal-line-top"></div>
    <div class="horizontal-line"></div>

    <!-- Cases d'insertion pour l'utilisateur -->
    <div class="form-container">
        <form action="<?php echo BASE_URL.'/connexions/connexion' ?>" method="post">
            <input type="text" placeholder="Pseudo" name="pseudo" class="input-field">
            <input type="password" placeholder="Mot de passe" name ="mdp" class="input-field">
            <div class="actions">
                <input type="submit" class="submit-button" value="Se connecter">
            </div>
        </form>
    </div>
    <?php echo $this->Session->flash(); ?>
</div>

