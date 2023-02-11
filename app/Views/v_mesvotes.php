<br>
<br>
<br>
<br>
<div class="formu">
<section id="about" class="about">
    <div class="container">
        <div class="row no-gutters">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
<h1 class="text-center">Mes votes</h1>

<?php
///*vérification du vote
if ($concoursSwitch==null){?>
        <h4>Vous n'avez pas encore voté pour un jeu SWITCH ! Votez dès à présent pour votre jeu favori !</h4>
        <?= anchor(base_url().'/public/mesvotes/switch', "Voter", ['class' => 'get-started-btn scrollto']) ?>
   <?php }
    else {?>
<h4>Vous avez déjà voté pour <?php echo $concoursSwitch[0]->concours_Nom; ?>.
    Revenez l'année prochaine pour voter pour votre tournoi préféré !</h4>
    <?php }?>

<?php
///*vérification du vote
if ($concoursPlaystation==null){?>
    <h4>Vous n'avez pas encore voté pour un jeu Playstation ! Votez dès à présent pour votre jeu favori !</h4>
    <?= anchor(base_url().'/public/mesvotes/playstation', "Voter", ['class' => 'get-started-btn scrollto']) ?>
<?php }
else {?>
    <h4>Vous avez déjà voté pour <?php echo $concoursPlaystation[0]->concours_Nom; ?>.
        Revenez l'année prochaine pour voter pour votre tournoi préféré !</h4>
<?php }?>

            <?php
            ///*vérification du vote
            if ($concoursXbox==null){?>
                <h4>Vous n'avez pas encore voté pour un jeu Xbox ! Votez dès à présent pour votre jeu favori !</h4>
                <?= anchor(base_url().'/public/mesvotes/xbox', "Voter", ['class' => 'get-started-btn scrollto']) ?>
            <?php }
            else {?>
                <h4>Vous avez déjà voté pour <?php echo $concoursXbox[0]->concours_Nom; ?>.
                    Revenez l'année prochaine pour voter pour votre tournoi préféré !</h4>
            <?php }?>
        </div>
    </div>
</section>
</div>
