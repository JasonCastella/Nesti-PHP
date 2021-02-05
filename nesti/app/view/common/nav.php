<nav class="navbar navbar-expand-lg py-lg-4 primary-dark" id="mainNav">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none text-white" href="#">Navigation</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mx-auto row">
                <li class="nav-item px-lg-4">
                    <button class="primary <?= ($loc == "recettes") ? "active" : ""; ?>"><a class="nav-link text-uppercase text-expanded text-white" href="<?= BASE_URL; ?>/recettes"><i class="fas fa-clipboard-list"></i> Recettes
                            <span class="sr-only">(current)</span>
                        </a></button>
                </li>
                <li class="nav-item px-lg-4">
                    <button class="primary <?= ($loc == "articles") ? "active" : ""; ?>"><a class="nav-link text-uppercase text-expanded text-white" href="<?= BASE_URL; ?>/articles"><i class="fas fa-utensils"></i> Articles</a></button>
                </li>
                <li class="nav-item px-lg-4">
                    <button class="primary  <?= ($loc == "utilisateurs") ? "active" : ""; ?>"><a class="nav-link text-uppercase text-expanded text-white" href="<?= BASE_URL; ?>/utilisateurs"><i class="fas fa-users"></i> Utilisateurs</a></button>
                </li>
                <li class="nav-item px-lg-4">
                    <button class="primary <?= ($loc == "statistiques") ? "active" : ""; ?>"><a class="nav-link text-uppercase text-expanded text-white" href="<?= BASE_URL; ?>/statistiques"><i class="fas fa-chart-bar"></i> Statistiques</a></button>
                </li>
                <li class="nav-item <?= ($loc == "profil") ? "active" : ""; ?> px-lg-4">
                    <a class="nav-link text-uppercase text-expanded text-white" href="<?= BASE_URL; ?>/profil"><i class="fas fa-user-circle"></i> Profil</a>
                </li>
                <li class="nav-item <?= ($loc == "login") ? "active" : ""; ?> px-lg-4">
                    <a class="nav-link text-uppercase text-expanded text-white" href="<?= BASE_URL; ?>/login"><i class="fas fa-sign-out-alt"></i> Déconnexion</a>
                </li>
            </ul>
    </div>
</nav>