<section id="presentation" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
            <div class="col-xl-6 col-lg-8">
                <h1>Mes votes<span>.</span></h1>
            </div>
            <div class="col-xl-6 col-lg-8" data-aos="fade-up">
                <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <img src="<?php echo base_url(); ?>/public/assets/img/gaming_zone.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right"
                     data-aos-delay="100">
                    <h3>Mes Inscriptions </h3>
                    <!-- ======= Contrôle sur les inscriptions ======= -->
                    <p class="fst">
                        <?php
                        if (!isset($inscription[0])) {?>
                       Vous n'êtes inscrit à aucun concours
                                <?=anchor(
                                    base_url() . '/public/monespace/minscrire/',
                                    'Cliquez ici si vous voulez vous inscrire',
                                    ['class' => 'get-started-btn scrollto']
                                )?>
                        <?php   } else {?>
                            Vous êtes inscrit(e) : <br>
                            <?php foreach ($inscription as $uneInscript) :
                                    $dateConv = strtotime($uneInscript->Date_avoirLieu);
                                    $date = date('d/m', $dateConv);
                                    $heure = date('H:i', $dateConv);
                                echo "Le " . $date . " à " . $heure; ?>
                        <br>Pour
                                <?php echo $uneInscript->concours_Nom;?>
                        <br>Sur
                                <?php echo $uneInscript->concours_SupportZone ;?>
                            <br> <br>
                            <?php endforeach; ?>
                            <?= anchor(
                                base_url() . '/public/monespace/minscrire/',
                                "S'inscrire à autre concours",
                                ['class' => 'get-started-btn scrollto']
                            ); ?>
                            <?= anchor(
                                base_url() . '/public/monespace/medesinscrire/',
                                "Se désinscrire d'un concours",
                                ['class' => 'get-started-btn scrollto']
                            );
                        }?>

                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section --><?php
