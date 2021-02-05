<section class="container">

    <h1 class="text-prim space">Articles</h1>

    <form class="form-inline my-2 my-lg-0 searchbar space">
        <div>
            <input class="form-control mr-sm-2" type="search" aria-label="Search">
            <i class="fas fa-search"></i>
        </div>
        <div>
            <a href=""><button type="button" class="btn btn-outline-secondary"><i class="far fa-eye"></i> Commandes</button></a>
            <a href="<?= BASE_URL; ?>/articles/importation"><button type="button" class="btn btn-outline-primary"><i class="fas fa-plus-circle"></i> Importer</button></a>
        </div>
    </form>

    <table class="table space">
        <thead class="thead-color">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Prix de vente</th>
                <th scope="col">Type</th>
                <th scope="col">Dernière importation</th>
                <th scope="col">Stock</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>1kg de farine</td>
                <td>1.07</td>
                <td>Ingrédient</td>
                <td>12-01-2021</td>
                <td>120</td>
                <td><a href="<?= BASE_URL; ?>/articles/edition">Modifier</a><br><a href="">Supprimer</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>12 oeufs</td>
                <td>2.49</td>
                <td>Ingrédient</td>
                <td>12-01-2021</td>
                <td>300</td>
                <td><a href="<?= BASE_URL; ?>/articles/edition">Modifier</a><br><a href="">Supprimer</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>6 oeufs</td>
                <td>1.15</td>
                <td>Ingrédient</td>
                <td>12-01-2021</td>
                <td>410</td>
                <td><a href="<?= BASE_URL; ?>/articles/edition">Modifier</a><br><a href="">Supprimer</a></td>
            </tr>
        </tbody>
    </table>

</section>