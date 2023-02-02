<section id="about" class="about">
    <div class="container">
        <div class="row no-gutters">
<h1 class="text-center">Mes votes</h1>
<?php if ($voteNintendo==null){?>
        <h4>Vous n'avez pas encore voté pour l'espace Nintendo ! Votez dès à présent pour votre jeu favori !</h4>
        <?= anchor(base_url().'/public/mesvotes/', "Voter", ['class' => 'get-started-btn scrollto']) ?>
   <?php }
else {?>
<h4>Vous avez déjà voter pour <?php echo $concoursNintendo ?>. Revenez l'année prochaine pour voter pour votre tournoi préféré !</h4>
<?php }?>
<?php if ($voteNextGen==null){?>
    <h4>Vous n'avez pas encore voté pour l'espace Nintendo ! Votez dès à présent pour votre jeu favori !</h4>
    <?= anchor(base_url().'/public/mesvotes/', "Voter", ['class' => 'get-started-btn scrollto']) ?>
<?php }
else {?>
    <h4>Vous avez déjà voter pour <?php echo $concoursNextGen ?>. Revenez l'année prochaine pour voter pour votre tournoi préféré !</h4>
<?php }?>
        </div>
    </div>
</section>
