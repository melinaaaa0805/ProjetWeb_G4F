
<section class="mt-5 pb-5">
    <h1 class="text-center">Inscription</h1>
    <div class="w-50 mx-auto">
        <?= form_open(base_url()."/inscription"); ?>
        <label class="form-label" for="pseudo">Pseudo:</label>
        <input class="form-control mb-3" type="text" name="pseudo" id="pseudo" required>

        <label class="form-label" for="email">Email:</label>
        <input class="form-control mb-3" type="email" name="email" id="email" required>

        <label class="form-label" for="pseudo">Nom:</label>
        <input class="form-control mb-3" type="text" name="nom" id="nom" required>

        <label class="form-label" for="pseudo">Prénom:</label>
        <input class="form-control mb-3" type="text" name="prenom" id="prenom" required>

        <label class="form-label" for="pseudo">Date de naissance:</label>
        <input class="form-control mb-3" type="date" name="dateNaissance" id="dateNaissance" required>

        <label class="form-label" for="password">Mot de passe:</label>
        <input class="form-control mb-4" type="password" name="password" id="password" required>

        <div class="d-flex justify-content-center">
            <input class="btn btn-success mx-auto fs-4 py-1 px-3" type="submit" value="Valider">
        </div>

        <?= form_close(); ?>
    </div>
</section>

