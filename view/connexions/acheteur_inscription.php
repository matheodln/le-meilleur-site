<div class="white-square">
    <div class="container">
        <a href="<?php echo BASE_URL.'/voyageur/connexions/inscription' ?>">
            <div class="box">
                <h2>Créer un compte</h2>
            </div>
        </a>
        <div class="line"></div>
        <a href="<?php echo BASE_URL.'/connexions/connexion' ?>">
            <div class="box2">
                <h2>Se connecter</h2>
            </div>
        </a>
    </div>
    <div class="horizontal-line-top"></div>
    <div class="horizontal-line"></div>

    <!-- Cases d'insertion pour l'utilisateur -->
    <div class="form-container">
        <div class="container2">
            <a href="<?php echo BASE_URL.'/marchand/connexions/inscription' ?>">
                <div class="small-box2"></div>
            </a>
            <span class="case-label">vendeur</span>
            <a href="<?php echo BASE_URL.'/voyageur/connexions/inscription' ?>">
                <div class="small-box"></div>
            </a>
            <span class="case-label">acheteur</span>
        </div>
        <form action="<?php echo BASE_URL.'/voyageur/connexions/inscription' ?>" method="post">
            <input type="text" placeholder="Nom" class="input-field" name="Nom">
            <input type="text" placeholder="Prénom" class="input-field" name="Prenom">
            <input type="text" placeholder="Pseudo" class="input-field" name="Pseudo">
            <input type="email" placeholder="Adresse mail" class="input-field" name="Mail">
            <input type="text" placeholder="Pays" class="input-field" name="Pays">
            <input type="text" placeholder="Ville" class="input-field" name="Ville">
            <input type="number" placeholder="Code postal" class="input-field" name="CodePostal">
            <input type="tel" placeholder="Numéro de téléphone" class="input-field" name="Telephone">
            <input type="text" placeholder="Adresse" class="input-field" name="Adresse">
            <p class="photo-label">Photo de profil :</p>
            <input type="text" placeholder="Télécharger une photo" class="input-field" name="Photo">
            <input type="password" placeholder="Mot de passe" class="input-field" name="MDP">
            <div class="actions">
                <input type="submit" class="submit-button" value="Se connecter">
            </div>
        </form>
        <?php echo $this->Session->flash(); ?>
    </div>
</div>

