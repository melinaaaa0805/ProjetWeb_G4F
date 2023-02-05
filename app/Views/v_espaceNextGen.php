
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
                        $propieteImage = ['src' => '/public/assets/img/nextGen/'.$jeuxPlaystation[0]->Id_jeux.'/'.$jeuxPlaystation[0]->Id_jeux.'_Presentation1.jpg',
                            'alt' => $jeuxPlaystation[0]->jeux_Nom,
                            'class' => 'card-img-top'];
                        echo img($propieteImage);?>
                        <div class = "card-footer">
                            <a><?=anchor(base_url().'/public/espaceNextGen/LeagueOfLegend', 'Découvrir '.$jeuxPlaystation[0]->jeux_Nom,['class' => 'btn-btn'])?></a>
                        </div>
                    </div>
                    <div class = "card">
                        <?php
                        $propieteImage = ['src' => '/public/assets/img/nextGen/'.$jeuxPlaystation[1]->Id_jeux.'/'.$jeuxPlaystation[1]->Id_jeux.'_Presentation1.jpg',
                            'alt' => $jeuxPlaystation[1]->jeux_Nom,
                            'class' => 'card-img-top'];
                        echo img($propieteImage);?>
                        <div class = "card-footer">
                            <a><?=anchor(base_url().'/public/espaceNextGen/CallOfDuty', 'Découvrir '.$jeuxPlaystation[1]->jeux_Nom,['class' => 'btn-btn'])?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class = "container">
                <h3>Venez voter pour élir un des trois jeux ci-dessous !</h3>
                <div class = "card-deck">
                    <div class = "card">
                        <?php
                        $propieteImage = ['src' => '/public/assets/img/nextGen/'.$jeuxPlaystationVote[0]->Id_jeux.'/'.$jeuxPlaystationVote[0]->Id_jeux.'_Presentation1.jpg',
                            'alt' => $jeuxPlaystationVote[0]->jeux_Nom,
                            'class' => 'card-img-top'];
                        echo img($propieteImage);?>
                        <div class = "card-footer">
                            <a><?=anchor(base_url().'/public/espaceNextGen/GranTurismo7', 'Découvrir '.$jeuxPlaystationVote[0]->jeux_Nom,['class' => 'btn-btn'])?></a>
                        </div>
                    </div>
                    <div class = "card">
                        <?php
                        $propieteImage = ['src' => '/public/assets/img/nextGen/'.$jeuxPlaystationVote[1]->Id_jeux.'/'.$jeuxPlaystationVote[1]->Id_jeux.'_Presentation1.jpg',
                            'alt' => $jeuxPlaystationVote[1]->jeux_Nom,
                            'class' => 'card-img-top'];
                        echo img($propieteImage);?>
                        <div class = "card-footer">
                            <a><?=anchor(base_url().'/public/espaceNextGen/F122', 'Découvrir '.$jeuxPlaystationVote[1]->jeux_Nom,['class' => 'btn-btn'])?></a>
                        </div>
                    </div>
                    <div class = "card">
                        <?php
                        $propieteImage = ['src' => '/public/assets/img/nextGen/'.$jeuxPlaystationVote[2]->Id_jeux.'/'.$jeuxPlaystationVote[2]->Id_jeux.'_Presentation1.jpg',
                            'alt' => $jeuxPlaystationVote[2]->jeux_Nom,
                            'class' => 'card-img-top'];
                        echo img($propieteImage);?>
                        <div class = "card-footer">
                            <a><?=anchor(base_url().'/public/espaceNextGen/Arkanoid', 'Découvrir '.$jeuxPlaystationVote[2]->jeux_Nom,['class' => 'btn-btn'])?></a>
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
            <h3>Découvrez tous les lots à gagner pour la section Playstation !</h3>
        </div>
    </div>
</section><!-- End Cta Section -->

<section id="lot">
    <table class="table table-hover">
        <tr>
            <th>Place</th>
            <th>Lots collectifs</th>
            <th>Lots individuels</th>
            <th> </th>
        </tr>
        <?php foreach ($lotsPlaystation as $lot) {?>
            <tr>
                <td><?php echo $lot->Numero_place; ?></td>
                <td><?php echo $lot->place_LotIndiv; ?></td>
                <td><?php echo $lot->place_LotEquipe; ?></td>
            </tr>
        <?php } ?>
    </table>
</section>

<div class = "container">
    <h3>Vous pouvez dès à présent découvrir les jeux qui ont déjà été sélectionnés pour le festival !
        Vous pouvez également connaitre les règles du tournoi qui lui est associé </h3>
    <div class = "card-deck">
        <div class = "card">
            <?php
            $propieteImage = ['src' => '/public/assets/img/nextGen/'.$jeuxXbox[0]->Id_jeux.'/'.$jeuxXbox[0]->Id_jeux.'_Presentation1.jpg',
                'alt' => $jeuxXbox[0]->jeux_Nom,
                'class' => 'card-img-top'];
            echo img($propieteImage);?>
            <div class = "card-footer">
                <a><?=anchor(base_url().'/public/espaceNextGen/RocketLeague', 'Découvrir '.$jeuxXbox[0]->jeux_Nom,['class' => 'btn-btn'])?></a>
            </div>
        </div>
        <div class = "card">
            <?php
            $propieteImage = ['src' => '/public/assets/img/nextGen/'.$jeuxXbox[1]->Id_jeux.'/'.$jeuxXbox[1]->Id_jeux.'_Presentation1.jpg',
                'alt' => $jeuxXbox[1]->jeux_Nom,
                'class' => 'card-img-top'];
            echo img($propieteImage);?>
            <div class = "card-footer">
                <a><?=anchor(base_url().'/public/espaceNextGen/Fifa22', 'Découvrir '.$jeuxXbox[1]->jeux_Nom,['class' => 'btn-btn'])?>?></a>
            </div>
        </div>
    </div>
</div>
<div class = "container">
    <h3>Venez voter pour élir un des trois jeux ci-dessous !</h3>
    <div class = "card-deck">
        <div class = "card">
            <?php
            $propieteImage = ['src' => '/public/assets/img/nextGen/'.$jeuxXboxVote[0]->Id_jeux.'/'.$jeuxXboxVote[0]->Id_jeux.'_Presentation1.jpg',
                'alt' => $jeuxXboxVote[0]->jeux_Nom,
                'class' => 'card-img-top'];
            echo img($propieteImage);?>
            <div class = "card-footer">
                <a><?=anchor(base_url().'/public/espaceNextGen/NBA2K23', 'Découvrir '.$jeuxXboxVote[0]->jeux_Nom,['class' => 'btn-btn'])?></a>
            </div>
        </div>
        <div class = "card">
            <?php
            $propieteImage = ['src' => '/public/assets/img/nextGen/'.$jeuxXboxVote[1]->Id_jeux.'/'.$jeuxXboxVote[1]->Id_jeux.'_Presentation1.jpg',
                'alt' => $jeuxXboxVote[1]->jeux_Nom,
                'class' => 'card-img-top'];
            echo img($propieteImage);?>
            <div class = "card-footer">
                <a><?=anchor(base_url().'/public/espaceNextGen/Overwatch', 'Découvrir '.$jeuxXboxVote[1]->jeux_Nom,['class' => 'btn-btn'])?>?></a>
            </div>
        </div>
        <div class = "card">
            <?php
            $propieteImage = ['src' => '/public/assets/img/nextGen/'.$jeuxXboxVote[2]->Id_jeux.'/'.$jeuxXboxVote[2]->Id_jeux.'_Presentation1.jpg',
                'alt' => $jeuxXboxVote[2]->jeux_Nom,
                'class' => 'card-img-top'];
            echo img($propieteImage);?>
            <div class = "card-footer">
                <a><?=anchor(base_url().'/public/espaceNextGen/HaloInfinite', 'Découvrir '.$jeuxXboxVote[2]->jeux_Nom,['class' => 'btn-btn'])?>?></a>
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
            <h3>Découvrez tous les lots à gagner pour la section Xbox !</h3>
        </div>
    </div>
</section><!-- End Cta Section -->

<section id="lot">
    <table class="table table-hover">
        <tr>
            <th>Place</th>
            <th>Lots collectifs</th>
            <th>Lots individuels</th>
            <th> </th>
        </tr>
        <?php foreach ($lotsXbox as $lot) {?>
            <tr>
                <td><?php echo $lot->Numero_place; ?></td>
                <td><?php echo $lot->place_LotIndiv; ?></td>
                <td><?php echo $lot->place_LotEquipe; ?></td>
            </tr>
        <?php } ?>
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

</body><?php
