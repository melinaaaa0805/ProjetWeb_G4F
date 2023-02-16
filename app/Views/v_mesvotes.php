<section id="presentation" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
            <div class="col-xl-6 col-lg-8">
                <h1>Mes votes<span>.</span></h1>
            </div>
            <div class="col-xl-6 col-lg-8" data-aos="fade-up">
                <div class="">
                    <h3>Section Switch</h3>
                    <?php ///*vérification du vote et affichage de l'image correspondante
                    if ($voteSwitch == null) {?>
                        <p>Vous n'avez pas encore voté pour un jeu SWITCH ! Votez dès à présent pour votre jeu favori
                            !</p>
                        <?= anchor(base_url() . '/public/mesvotes/switch', "Voter", ['class' => 'btn-btn']) ?>
                    <?php } else {?>
                        <p>Vous avez déjà voté pour <?php echo $voteSwitch[0]->concours_Nom; ?>.
                            Revenez l'année prochaine pour voter pour votre tournoi préféré !</p>
                        <?php $propieteImage = ['src' => '/public/assets/img/'
                            . 'nintendo' . '/' . $voteSwitch[0]->concours_IdJeux . '/' .
                            $voteSwitch[0]->concours_IdJeux . '_Presentation1.jpg',
                            'alt' => $voteSwitch[0]->concours_Nom,
                            'class' => 'item active', 'style' => 'width:50%;'];
                        echo img($propieteImage);
                    }?>
                </div>
                <div class="">
                    <h3>Section Playstation</h3>
                    <?php ///*vérification du vote
                    if ($votePlaystation == null) {?>
                        <p>Vous n'avez pas encore voté pour un jeu Playstation ! Votez dès à présent pour votre jeu
                            favori !</p>
                        <?= anchor(base_url() . '/public/mesvotes/playstation', "Voter", ['class' => 'btn-btn']) ;
                    } else {?>
                        <p>Vous avez déjà voté pour <?php echo $votePlaystation[0]->concours_Nom; ?>.
                            Revenez l'année prochaine pour voter pour votre tournoi préféré !</p>
                        <?php $propieteImage = ['src' => '/public/assets/img/'
                            . 'nextGen' . '/' . $votePlaystation[0]->concours_IdJeux . '/' .
                            $votePlaystation[0]->concours_IdJeux . '_Presentation1.jpg',
                            'alt' => $votePlaystation[0]->concours_Nom,
                            'class' => 'item active', 'style' => 'width:50%;'];
                        echo img($propieteImage);
                    }?>
                </div>
                <div class="">
                    <h3>Section Xbox</h3>
                    <?php ///*vérification du vote
                    if ($voteXbox == null) {?>
                        <p>Vous n'avez pas encore voté pour un jeu Xbox ! Votez dès à présent pour votre jeu
                            favori !</p>
                        <?= anchor(base_url() . '/public/mesvotes/xbox', "Voter", ['class' => 'btn-btn']);
                    } else {?>
                <p>Vous avez déjà voté pour <?php echo $voteXbox[0]->concours_Nom; ?>.
                    Revenez l'année prochaine pour voter pour votre tournoi préféré !</p>
                        <?php
                        $propieteImage = ['src' => '/public/assets/img/'
                        . 'nextGen' . '/' . $voteXbox[0]->concours_IdJeux . '/' .
                        $voteXbox[0]->concours_IdJeux . '_Presentation1.jpg',
                        'alt' => $voteXbox[0]->concours_Nom,
                        'class' => 'item active', 'style' => 'width:50%;'];
                        echo img($propieteImage);
                    }?>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>

