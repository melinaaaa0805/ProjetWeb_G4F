<section id="presentation" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
            <div class="col-xl-6 col-lg-8">
                <h1>Votre avis compte<span>.</span></h1>
            </div>
            <div class="col-xl-6 col-lg-8" data-aos="fade-up">
                <div class="">
                <?php if (isset($mesAvis)) { ?>
    <h4 class="text-center"> <?php echo $titre ?></h4>
                    <?= form_open(base_url() . '/public/monespace/donnermonavis/monAvis'); ?>
                    <div class="text-center">
        <label for="tournoi">Choisir un tournoi</label><br>
            <select name="tournoi" id="tournoi" required>
                    <?php foreach ($mesAvis as $unAvis) :
                        $dateConv = strtotime($unAvis->Date_avoirLieu);
                        $date = date('d/m', $dateConv);
                        $heure = date('H:i', $dateConv); ?>
                <option value="<?php echo $unAvis->CodeReservation_inscription?>">
                        <?php echo $unAvis->concours_Nom . ' - Le ' . $date . ' | ' . $heure ?></option>
                    <?php endforeach; ?>
            </select><br><br>
        <label for="note">Donner une note entre 0 et 5</label><br>
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
                    </div> <input class="btn-btn" type="submit" name="submit" value="Envoyer mon avis">
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</section>      <?php  } ?>