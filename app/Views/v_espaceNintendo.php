
<title><?php echo $titre ?></title>
<h2><?php echo $titre ?></h2>


<div class="card-deck">
    <div class="card">
         <?php
        $propieteImage = ['src' => '/public/assets/img/nintendo/justDance/JustDance.jpg',
            'alt' => 'Just Dance 2023',
            'class' => 'card-img-top'];
        echo img($propieteImage);
        ?>

        <div class="card-body">
            <h5 class="card-title"><?php echo $jeux[0]->jeux_nom?></h5>
            <a class="btn-btn" href="">Découvrir ce jeu</a>
        </div>
    </div>
    <div class="card">
        <?php
        $propieteImage = ['src' => '/public/assets/img/nintendo/superSmach/SuperSmachBrosUltimate.jpg',
            'alt' => 'Super Smach Bros Ultimate',
            'class' => 'card-img-top'];
        echo img($propieteImage);
        ?>
        <div class="card-body">
            <h5 class="card-title"><?php echo $jeux[1]->jeux_nom?></h5>
            <a class="btn-btn" href="">Découvrir ce jeu</a>
        </div>
    </div>
</div>


<div class="card-deck">
    <div class="card">
        <?php
        $propieteImage = ['src' => '/public/assets/img/nintendo/marioStrikers/MarioStrikersBattleLeagueFootball.jpg',
            'alt' => 'Mario Strikers : Battle League Football',
            'class' => 'card-img-top'];
        echo img($propieteImage);
        ?>
        <div class="card-body">
            <h5 class="card-title"><?php echo $jeux[2]->jeux_nom?></h5>
            <a class="btn-btn" href="">Découvrir ce jeu</a>
        </div>
    </div>
    <div class="card">
        <?php
        $propieteImage = ['src' => '/public/assets/img/nintendo/switchSport/NintendoSwitchSports.jps',
            'alt' => 'Nintendo Switch Sports',
            'class' => 'card-img-top'];
        echo img($propieteImage);
        ?>
        <div class="card-body">
            <h5 class="card-title"><?php echo $jeux[3]->jeux_nom?></h5>
            <a class="btn-btn" href="">Découvrir ce jeu</a>
        </div>
    </div>
    <div class="card">
        <?php
        $propieteImage = ['src' => '/public/assets/img/nintendo/streetFighter/StreetFighter6.png',
            'alt' => 'Street Fighter 6',
            'class' => 'card-img-top'];
        echo img($propieteImage);
        ?>
        <div class="card-body">
            <h5 class="card-title"><?php echo $jeux[4]->jeux_nom?></h5>
            <a class="btn-btn" href="">Découvrir ce jeu</a>
        </div>
    </div>
</div>