<section id="about" class="about">
    <div class="container">
        <div class="row no-gutters">
<h1 class="text-center">Mes votes</h1>
<?php if ($voteSwitch==null){?>
        <h4>Vous n'avez pas encore voté pour un jeu SWITCH ! Votez dès à présent pour votre jeu favori !</h4>
        <?= anchor(base_url().'/public/mesvotes/switch', "Voter", ['class' => 'get-started-btn scrollto']) ?>
   <?php }
else {?>
<h4>Vous avez déjà voter pour <?php echo $concoursSwitch ?>. Revenez l'année prochaine pour voter pour votre tournoi préféré !</h4>
<?php }?>
<?php if ($votePlaystation==null){?>
    <h4>Vous n'avez pas encore voté pour un jeu Playstation ! Votez dès à présent pour votre jeu favori !</h4>
    <?= anchor(base_url().'/public/mesvotes/playstation', "Voter", ['class' => 'get-started-btn scrollto']) ?>
<?php }
else {?>
    <h4>Vous avez déjà voter pour <?php echo $concoursPlaystation ?>. Revenez l'année prochaine pour voter pour votre tournoi préféré !</h4>
<?php }?>
            <?php if ($voteXbox==null){?>
                <h4>Vous n'avez pas encore voté pour un jeu Xbox ! Votez dès à présent pour votre jeu favori !</h4>
                <?= anchor(base_url().'/public/mesvotes/xbox', "Voter", ['class' => 'get-started-btn scrollto']) ?>
            <?php }
            else {?>
                <h4>Vous avez déjà voter pour <?php echo $concoursXbox ?>. Revenez l'année prochaine pour voter pour votre tournoi préféré !</h4>
            <?php }?>
        </div>
    </div>
</section>
