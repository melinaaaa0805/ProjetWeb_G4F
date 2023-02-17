<section id="presentation" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
            <div class="col-xl-6 col-lg-8">
                <h1>C'est à vous de voter ! </h1>
            </div>
            <div class="col-xl-6 col-lg-8" data-aos="fade-up">
                <div class="">
            <h3>Choisissez votre concours préféré !</h3><br>
        <?= form_open(base_url() . '/public/monvote/voter');
        foreach ($jeux as $UnJeu) :
            ///Affichage des différents jeux avec un bouton radio ?>
        <input type="radio" name="jeux" value="<?php echo $UnJeu->Id_jeux?>" checked> <?php echo $UnJeu->jeux_Nom?><br>
        <?php endforeach;?>
            <input class="btn-btn" type="submit" name ="submit" value="Valider">
        <?= form_close(); ?>
            </div>
            </div>
        </div>
    </div>
</section>

