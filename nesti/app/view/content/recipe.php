<section class="container">

    <h1 class="text-prim space">Recettes</h1>

    <form class="form-inline my-2 my-lg-0 searchbar space">
        <div>
            <input class="form-control mr-sm-2" type="search" aria-label="Search">
            <i class="fas fa-search"></i>
        </div>
        <a href="<?= BASE_URL; ?>/recettes/creation"><button type="button" class="btn btn-outline-primary"><i class="fas fa-plus-circle"></i> Ajouter</button></a>
    </form>

    <table class="table space">
        <thead class="thead-color">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Difficulté</th>
                <th scope="col">Personnes</th>
                <th scope="col">Temps</th>
                <th scope="col">Chef</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($arrayRecipe as $value) {
            ?>
                <tr>
                    <td><?= $value->getId(); ?></td>
                    <td><?= $value->getName(); ?></td>
                    <td>4</td>
                    <td>4</td>
                    <td>35 min</td>
                    <td>Zaoni</td>
                    <td><a href="<?= BASE_URL; ?>/recettes/edition">Modifier</a><br><a href="">Supprimer</a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</section>