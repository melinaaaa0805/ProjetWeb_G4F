<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <img src="<?php echo base_url(); ?>/public/assets/img/gaming_zone.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                    <h3>Me désinscrire</h3>
                    <p class="fst">
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
                        Vous êtes inscrit(e) : <br>
                        <?= form_open(base_url(). '/public/monespace/desinscription'); ?>
                        <select name="selection">
                                <?php foreach ($inscription as $uneInscript):
                                    $dateConv=strtotime($uneInscript->Date_avoirLieu);
                                    $date=date('d/m',$dateConv);
                                    $heure=date('H:i',$dateConv);?>
                        <option value="<?php echo $uneInscript->CodeReservation_inscription ?>"><?php echo $uneInscript->concours_Nom." Le ".$date.' | '.$heure ?></option>
                        <?php endforeach;?>
                                <?= anchor(base_url().'/public/monespace/minscrire/', 'Cliquez ici si vous voulez vous inscrire à autre concours'); ?>
                            <?= anchor(base_url().'/public/monespace/medesinscrire/', 'Cliquez ici si vous voulez vous désinscrire à un concours');?>
                    <div class="d-flex justify-content-center">
                        <input class="btn btn-success mx-auto fs-4 py-1 px-3" type="submit" name ="submit" value="Me désinscrire">
                    </div>
                    </p>
                    <?= form_close(); ?>
                </div>
            </div>

        </div>
    </section><!-- End About Section --><?php
