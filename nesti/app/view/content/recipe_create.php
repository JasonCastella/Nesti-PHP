<section class="container">
    <div class="recipe-content-row">
        <div class="recipe-content-column">
            <h1 class="text-prim space">Création d'une recette</h1>
            <form>
                <div class="form-group">
                    <label for="recipe-name">Nom de la recette</label>
                    <input type="text" class="form-control" id="recipe-name" required>
                    <label for="author">Auteur de la recette : <?php $author; ?></label>
                </div>
                <div class="from-group row">
                    <label for="difficulty" class="col-sm-9 col-form-label">Difficulté (note sur 5)</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="difficulty" required>
                    </div>
                </div>
                <div class="from-group row">
                    <label for="nb-person" class="col-sm-9 col-form-label">Nombre de personnes</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="nb-person" required>
                    </div>
                </div>
                <div class="from-group row">
                    <label for="time" class="col-sm-9 col-form-label">Temps de préparation (en minutes)</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="time" required>
                    </div>
                </div>
                <div class="from-row">
                    <button class="btn btn-green">Valider</button>
                    <button class="btn btn-info">Annuler</button>
                </div>
            </form>
        </div>
        <div class="recipe-content-column">

        </div>
    </div>




</section>