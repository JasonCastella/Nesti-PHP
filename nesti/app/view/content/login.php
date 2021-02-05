<section class="login-core">

    <img src="<?= BASE_URL; ?>/public/images/Nesti-logo.png" alt="Logo Nesti" class="logo">

    <form class="container login-form">

        <h1>Connexion</h1>
        <div class="form-group">
            <label for="id"><i class="far fa-user"></i> Identifiant</label>
            <input type="text" class="form-control" id="id" required>
        </div>

        <div class="form-group">
            <label for="mdp"><i class="fas fa-lock"></i> Mot de passe</label>
            <input type="password" class="form-control" id="mdp" required>
        </div>
        <button type="submit" class="primary-light">Valider</button>

    </form>

</section>