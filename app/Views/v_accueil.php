<?php
$session = \Config\Services::session();?>
<!-- ======= Hero Section ======= -->
<title><?php echo $titre ?></title>
<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
            <div class="col-xl-6 col-lg-8">
                <h1>Le Festival Geek4Fun vous attend le 27, 28 et 29 mai 2023 à Tours<span>.</span></h1>
                    <div id="clockdiv">
                        <div>
                            <span class="days" id="day"></span>
                            <div class="smalltext">Jours</div>
                        </div>
                        <div>
                            <span class="hours" id="hour"></span>
                            <div class="smalltext">Heures</div>
                        </div>
                        <div>
                            <span class="minutes" id="minute"></span>
                            <div class="smalltext">Minutes</div>
                        </div>
                        <div>
                            <span class="seconds" id="second"></span>
                            <div class="smalltext">Secondes</div>
                        </div>
                    </div>

                    <p id="demo"></p>

                    <script>

                        var deadline = new Date("may 27, 2023 13:00:00").getTime();

                        var x = setInterval(function() {

                            var now = new Date().getTime();
                            var t = deadline - now;
                            var days = Math.floor(t / (1000 * 60 * 60 * 24));
                            var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60));
                            var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
                            var seconds = Math.floor((t % (1000 * 60)) / 1000);
                            document.getElementById("day").innerHTML =days ;
                            document.getElementById("hour").innerHTML =hours;
                            document.getElementById("minute").innerHTML = minutes;
                            document.getElementById("second").innerHTML =seconds;
                            if (t < 0) {
                                clearInterval(x);
                                document.getElementById("demo").innerHTML = "TIME UP";
                                document.getElementById("day").innerHTML ='0';
                                document.getElementById("hour").innerHTML ='0';
                                document.getElementById("minute").innerHTML ='0' ;
                                document.getElementById("second").innerHTML = '0'; }
                        }, 1000);
                    </script>
            </div>
        </div>

        <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
            <div class="col-xl-2 col-md-4">
                <div class="icon-box">
                    <i class="bx bx-star"></i>
                    <h3><a href="">Notre engagement</a></h3>
                </div>
            </div>
            <div class="col-xl-2 col-md-4">
                <div class="icon-box">
                    <i class="bx bx-columns"></i>
                    <h3><a href="">Le programme</a></h3>
                </div>
            </div>
            <div class="col-xl-2 col-md-4">
                <div class="icon-box">
                    <i class="bx bx-play-circle"></i>
                    <h3><a href="">Les tournois</a></h3>
                </div>
            </div>
        </div>

    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <img src="<?php echo base_url(); ?>/public/assets/img/gaming_zone.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
                    <h3>Le festival</h3>
                    <p class="fst-italic">
                        Le festival Geek 4 Fun souhaite valoriser les usages pédagogiques des jeux vidéo, du
                        numérique, mais aussi sensibiliser les jeunes aux enjeux de la sécurité informatique.
                        <br>Cet événement fédérateur qui réunira les jeunes, les familles, les passionnés et les curieux
                        autour du premier loisir des français affirme la volonté d'impulser une nouvelle dynamique
                        territoriale.
                        <br>Cet événement se déroulera sur plus de 4 000m2 et les visiteurs pourront retrouver :
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i>Un salon du jeu vidéo avec tournois</li>
                        <li><i class="ri-check-double-line"></i>de pouvoir rencontrer des étudiants en écoles
                            supérieures de jeux vidéo.Un salon Écoles supérieures et centres de formations dans
                            les domaines du jeu vidéo, de l’image, des arts graphiques et du numérique.</li>
                        <li><i class="ri-check-double-line"></i>Deux journées de Job et stage dating afin de réunir les entreprises du secteur et
                            demandeurs de stages et emplois de la région.</li>
                        <li><i class="ri-check-double-line"></i>Un espace pédagogique mettant en relief les jeux vidéo éducatifs et sportifs pouvant
                            être utilisés en milieu scolaire ou extra-scolaire, mais aussi la sensibilisation, la
                            prévention des risques liés à l'Internet.</li>
                        <li><i class="ri-check-double-line"></i>Un espace Studios Indépendants.</li>
                        <li><i class="ri-check-double-line"></i>Un concours cosplay.</li>
                    </ul>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="image col-lg-6" style='background-image: url("<?php echo base_url(); ?>/public/assets/img/accueil/jeux_video.jpg");' data-aos="fade-right"></div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                    <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                        <i class="bx bx-world"></i>
                        <h4>Découvrir des métiers</h4>
                        <p>Venez découvrir tous les métiers de la filière du jeu vidéo à travers les différents stands. </p>
                    </div>
                    <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                        <i class="bx bx-book-alt"></i>
                        <h4>Rencontrer des étudiants</h4>
                        <p>Pendant ce festival, vous aurez l'occasion de pouvoir rencontrer des étudiants en écoles
                            supérieures de jeux vidéo.</p>
                    </div>
                    <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                        <i class="bx bx-shape-polygon"></i>
                        <h4>Discuter avec des entreprises</h4>
                        <p>Plusieurs entreprises seront présentes, ce sera l'occasion de discuter avec ces entreprises
                            du secteur implantées sur le territoire,des éditeurs, studios et constructeurs.</p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2></h2>
                <p>Votez pour un jeu Nintendo</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <?php
                        $propieteImage = ['src' => '/public/assets/img/nintendo/4/MarioStrikersBattleLeagueFootball.jpg',
                            'alt' => 'Mario Strikers : Battle League Football',
                            'class' => 'icon'];
                        echo img($propieteImage);
                        ?>
                        <h4><a href="">Mario Strikers : Battle League Football</a></h4>
                        <p><?=anchor(base_url().'/public/espaceNintendo/MarioStrikersBattleLeague', 'Découvrir ce jeu')?></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <?php
                        $propieteImage = ['src' => '/public/assets/img/nintendo/5/NintendoSwitchSports.png',
                            'alt' => 'Nintendo Switch Sports',
                            'class' => 'icon'];
                        echo img($propieteImage);
                        ?>
                        <h4><a href="">Nintendo Switch Sports</a></h4>
                        <p><?=anchor(base_url().'/public/espaceNintendo/NintendoSwitchSports', 'Découvrir ce jeu')?></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <?php
                        $propieteImage = ['src' => '/public/assets/img/nintendo/6/StreetFighter6.jpg',
                            'alt' => 'Street Fighter 6',
                            'class' => 'icon'];
                        echo img($propieteImage);
                        ?>
                        <h4><a href="">Street Fighter 6</a></h4>
                        <p><?=anchor(base_url().'/public/espaceNintendo/StreetFighter', 'Découvrir ce jeu')?></p>
                    </div>
                </div>

                <div class="section-title">
                    <h2></h2>
                    <p>Votez pour un jeu Xbox</p>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <?php
                        $propieteImage = ['src' => '/public/assets/img/nextGen/nba/NBA2K23.jpg',
                            'alt' => 'NBA 2K23',
                            'class' => 'icon'];
                        echo img($propieteImage);
                        ?>
                        <h4><a href="">NBA 2K23</a></h4>
                        <p><?=anchor(base_url().'/public/espaceNextGen/NBA2K23', 'Découvrir ce jeu')?></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <?php
                        $propieteImage = ['src' => '/public/assets/img/nextGen/overwatch/Overwatch2.jpg',
                            'alt' => 'Overwatch 2',
                            'class' => 'icon'];
                        echo img($propieteImage);
                        ?>
                        <h4><a href="">Overwatch 2</a></h4>
                        <p><?=anchor(base_url().'/public/espaceNextGen/Overwatch', 'Découvrir ce jeu')?></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <?php
                        $propieteImage = ['src' => '/public/assets/img/nextGen/haloInfinite/HaloInfinite.jpg',
                            'alt' => 'Halo Infinite',
                            'class' => 'icon'];
                        echo img($propieteImage);
                        ?>
                        <h4><a href="">Halo Infinite</a></h4>
                        <p><?=anchor(base_url().'/public/espaceNextGen/HaloInfinite', 'Découvrir ce jeu')?></p>
                    </div>
                </div>
                <div class="section-title">
                    <h2></h2>
                    <p>Votez pour un jeu PS</p>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <?php
                        $propieteImage = ['src' => '/public/assets/img/nextGen/granTurismo/GranTurismo7.jpg',
                            'alt' => 'Gran Turismo 7',
                            'class' => 'icon'];
                        echo img($propieteImage);
                        ?>
                        <h4><a href="">Gran Turismo 7</a></h4>
                        <p><?=anchor(base_url().'/public/espaceNextGen/GranTurismo7', 'Découvrir ce jeu')?></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <?php
                        $propieteImage = ['src' => '/public/assets/img/nextGen/F122/F122.jpg',
                            'alt' => 'F1 22',
                            'class' => 'icon'];
                        echo img($propieteImage);
                        ?>
                        <h4><a href="">F1 22</a></h4>
                        <p><?=anchor(base_url().'/public/espaceNextGen/F122', 'Découvrir ce jeu')?></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <?php
                        $propieteImage = ['src' => '/public/assets/img/nextGen/Arkanoid/ArkanoiEternalBattle.jpg',
                            'alt' => 'F1 22',
                            'class' => 'icon'];
                        echo img($propieteImage);
                        ?>
                        <h4><a href="">Arkanoid Eternal Battle</a></h4>
                        <p><?=anchor(base_url().'/public/espaceNextGen/Arkanoid', 'Découvrir ce jeu')?></p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

            <div class="text-center">
                <h3>Inscrivez-vous !</h3>
                <p>Si vous désirez parctipez à nos nombreux tournois, n'oubliez pas de vous inscrire !</p>
                <a class="cta-btn" href="#">S'inscire</a>
            </div>

        </div>
    </section><!-- End Cta Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

                    <div class="text-center">
                        <h3>Nos valeurs</h3>
                        <p>
                            Le festival est un lieu de partage visité par un grand nombre de personnes où chacun
                            doit pouvoir passer un bon moment.
                            <br>C'est un espace labellisé « Respect Zone », une ONG qui offre une charte du respect
                            et des outils positifs de communication non violente en ligne et hors ligne. <br>En nous
                            labellisant Respect Zone, notre festival s’inscrit dans le travail de
                            <a href="www.respectzone.org"> www.respectzone.org</a>
                            pour l’éducation au numérique, la liberté́ de l’expression
                            responsable, la prévention de la cyber violence et la protection de l’enfance.
                            <br>La Charte du respect sur Internet de Respect Zone est disponible sur :
                            <a href="www.respectzone.org"> www.respectzone.org</a>
                        </p>

                        </div>
                </div>
    </section>

                    <a class="btn-btn" href="#">Découvrir la charte</a>
                    <!-- End .content-->


    <!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="zoom-in">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <h3>Les ateliers participatifs.</h3>
                            <p>
                                De nombreux ateliers répartis en 8 pôles seront mis à disposition afin de présenter les
                                différents domaines du secteur et l’étendue des métiers et du savoir-faire français.
                                La partie associée au salon du jeu vidéo accueil un espace Ateliers éducatifs, interactifs et
                                numériques qui sera proposé par les professionnels du secteur. Il sera organisé en plusieurs
                                pôles différents :
                                <br>- Programmation/codage jeux vidéo ;
                                <br>- Robotique, objets connectés, impression 3D ;
                                <br>- Image, animation et vidéo
                                <br>- Art Graphique et manga
                                <br>- Simulation (danse – conduite – sports – réalité virtuelle) ;
                                <br>- Sensibilisation (prévention web – cyber harcèlement – addiction) ;
                                <br>- Un espace de jeux (tests – ateliers – concours)
                                <br>- Un espace pédagogique (réflexion - codage - jeux vidéo éducatifs)
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <h3>Des conférences et tables rondes</h3>
                            <p>
                                Vous pourrez assister à des conférences et des tables rondes animées par des professionnels
                                du secteur du jeu vidéo et du numérique.
                                <br>De nombreux thèmes y seront abordés tels que les
                                métiers dans le jeu vidéo et du numérique, le cyber harcèlement, les NFT, la relation aux
                                écrans, la création de son studio de jeu vidéo, etc...
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <h3>Un job et un stage Dating</h3>
                            <p>
                                Pendant le festival, venez rencontrer des entreprises du secteur du jeu vidéo et du numérique
                                situé dans votre département et dans les départements limitrophes. L'occasion de rencontrer
                                votre futur employeur près de chez vous, que vous soyez à la recherche d’un emploi, un stage,
                                ou une alternance.
                                <br>Cet espace est en partenariat avec l’agence française pour le jeu vidéo (AFJV), le portail de
                                l’emploi et des informations professionnelles des industries multimédia et jeux vidéo.
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <h3>Un salon du jeu vidéo</h3>
                            <p>
                                Composé de plusieurs dizaines postes de jeu, le salon proposera l’actualité du jeu vidéo, du
                                rétrogaming mais aussi la présence de studios indépendants (plus particulièrement de notre
                                département). Enfin, des tournois seront organisés lors de chaque demi-journée de
                                l’événement.
                            </p>
                        </div>
                    </div><!-- End testimonial item -->
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Nous contacter</p>
            </div>

            <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Adresse :</h4>
                            <p>2 rue de l'Eglise 37000 Tours</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email :</h4>
                            <p>geek4Fun@pro.fr</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Téléphone :</h4>
                            <p>02 48 67 73 84</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="/public/forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Votre message a bien été envoyé. Merci !</div>
                        </div>
                        <div class="text-center"><button type="submit">Envoyez</button></div>
                    </form>

                </div>

            </div>
        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->