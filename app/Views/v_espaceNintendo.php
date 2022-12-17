
<title><?php echo $titre ?></title>

<body>

<section id="presentation" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
            <div class="col-xl-6 col-lg-8">
                <h1><?php echo $titre ?><span>.</span></h1>
            </div>
                <div class = "container">
                    <h3>Vous pouvez dès à présent découvrir les jeux qui ont déjà été sélectionnés pour le festival !
                    Vous pouvez également connaitre les règles du tournoi qui lui est associé </h3>
                    <div class = "card-deck">
                        <div class = "card">
                            <?php
                            $propieteImage = ['src' => '/public/assets/img/nintendo/superSmach/SuperSmachBrosUltimate.jpg',
                                'alt' => 'Super Smach Bros Ultimate',
                                'class' => 'card-img-top'];
                            echo img($propieteImage);?>
                            <div class = "card-footer">
                                <a class="btn-btn" href="">Découvrir <?php echo $jeux[0]->jeux_Nom?></a>
                            </div>
                        </div>
                        <div class = "card">
                            <?php
                            $propieteImage = ['src' => '/public/assets/img/nintendo/justDance/JustDance.jpg',
                                'alt' => 'Just Dance 2023',
                                'class' => 'card-img-top'];
                            echo img($propieteImage);?>
                            <div class = "card-footer">
                                <a class="btn-btn" href="">Découvrir <?php echo $jeux[1]->jeux_Nom?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class = "container">
                    <h3>Venez voter pour élir un des trois jeux ci-dessous !</h3>
                    <div class = "card-deck">
                        <div class = "card">
                            <?php
                            $propieteImage = ['src' => '/public/assets/img/nintendo/marioStrikers/MarioStrikersBattleLeagueFootball.jpg',
                                'alt' => 'Mario Strikers : Battle League Football',
                                'class' => 'card-img-top'];
                            echo img($propieteImage);?>
                            <div class = "card-footer">
                                <a class="btn-btn" href="">Découvrir <?php echo $jeux[2]->jeux_Nom?></a>
                            </div>
                        </div>
                        <div class = "card">
                            <?php
                            $propieteImage = ['src' => '/public/assets/img/nintendo/switchSport/NintendoSwitchSports.png',
                                'alt' => 'Nintendo Switch Sports',
                                'class' => 'card-img-top'];
                            echo img($propieteImage);?>
                            <div class = "card-footer">
                                <a class="btn-btn" href="">Découvrir <?php echo $jeux[3]->jeux_Nom?></a>
                            </div>
                        </div>
                        <div class = "card">
                            <?php
                            $propieteImage = ['src' => '/public/assets/img/nintendo/streetFighter/StreetFighter6.jpg',
                                'alt' => 'Street Fighter 6',
                                'class' => 'card-img-top'];
                            echo img($propieteImage);?>
                            <div class = "card-footer">
                               <a class="btn-btn" href="">Découvrir <?php echo $jeux[4]->jeux_Nom?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- ======= Cta Section ======= -->
<section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">
        <div class="text-center">
            <h3>Découvrez tous les lots à gagner pour la section Nintendo !</h3>
        </div>
    </div>
</section><!-- End Cta Section -->

<section id="lot">
<table class="table table-hover">

</table>
</section>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src = "https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity = "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin = "anonymous">
</script>

<script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity = "sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin = "anonymous">
</script>

<script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity = "sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin = "anonymous">
</script>

</body>