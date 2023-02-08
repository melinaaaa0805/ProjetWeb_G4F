
<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <img src="<?php echo base_url(); ?>/public/assets/img/gaming_zone.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                    <h3>Mes Inscriptions </h3>
                    <p class="fst">
                        <?php if (!isset($inscription[0])){?>
                       Vous n'êtes inscrit à aucun concours !
                            <a>Cliquez ici si vous voulez vous inscrire</a>
                     <?php   }
                        else {?>
                            Vous êtes inscrit(e) :
                        <?php foreach ($inscription as $uneInscript):
                                foreach ($uneInscript as $inscrit):
                                echo "Le ".$inscrit->Date_avoirLieu; ?>
                        <br>pour
                       <?php echo $inscrit->concours_Nom;?>
                        <br>sur
                                    <?php echo $inscrit->SupportZone_zone;?>
                        <br>dans l'espace
                                    <?php echo $inscrit->zone_NomZone;
                        endforeach;
                       endforeach; }?>

                    </p>
                    <ul>

                    </ul>
                </div>
            </div>

        </div>
    </section><!-- End About Section --><?php
