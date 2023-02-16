
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
                    <h6><?php if (isset($message)) {
                        echo $message;
                        } ?></h6>
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
                        <?php
                        if (!isset($mesAvis[0])) {?>
                            Vous n'étiez inscrit à aucun concours, vous ne pouvez donc pas donner votre avis.
                        <?php   } ?>
                            <?php foreach ($mesAvis as $unAvis) :
                                if ($unAvis->inscription_Avis == null) {?>
                                    Vous êtes inscrit à un ou plusieurs concours.

                                    <?php echo $unAvis->concours_Nom;?> <br>
                                    <?= anchor(base_url() . '/public/monespace/donnermonavis/', 'Cliquez ici si vous voulez donner votre avis'); ?>

                                <?php } else {
                                    echo $unAvis->concours_Nom;?>
                                <br>
                                    <?php echo $unAvis->inscription_Avis ;?>
                                <br>
                                    <?php echo $unAvis->inscription_AvisCommentaire ;?>
                            <br>
                                <?php }
                            endforeach; ?>
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section --><?php
