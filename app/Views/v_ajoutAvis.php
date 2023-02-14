<!-- page de connexion -->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php if (isset($mesAvis)) { ?>
<section class="mt-5 pb-5">
    <h1 class="text-center">Avis</h1>
    <h4 class="text-center"> <?php echo $titre ?></h4>
    <div class="w-50 mx-auto">

        <?= form_open(base_url(). '/public/monespace/donnermonavis/monAvis'); ?>

        <label for="tournoi">Choisir un tournoi</label>
            <select name="tournoi" id="tournoi" required>
                <?php foreach ($mesAvis as $unAvis): ?>
                <option value="<?php echo $unAvis->CodeReservation_inscription?>"><?php echo $unAvis->concours_Nom ?></option>
                <?php endforeach; ?>
            </select><br><br>
        <label for="note">Donner une note entre 0 et 5</label>
        <select name="note" id="note" required>
            <option value="" disabled selected hidden>Choisissez une note</option>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select><br><br>

            <label class="form-label" for="commentaire">Avez-vous des commentaires à faire ?</label> <br>
        <textarea id="commentaire" name="commentaire" placeholder="Les points d'amélioration sont..."></textarea>

        <div class="d-flex justify-content-center">
            <input class="btn btn-success mx-auto fs-4 py-1 px-3" type="submit" name="submit" value="Envoyer mon avis">
        </div>
        <?= form_close(); ?>
    </div>
    <?php } else { echo $concours ; } ?>
</section>