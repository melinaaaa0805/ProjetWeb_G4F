<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<title><?php echo $jeux[0]->jeux_Nom; ?></title>

<body>
<!-- Titre en haut de la page -->
<section id="presentation" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
            <div class="col-xl-6 col-lg-8">
                <h1><?php echo $jeux[0]->jeux_Nom ?><span>.</span></h1>
            </div>
        </div>
    </div>
</section>

<!-- Carrousel -->
<div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Utilisation de l'ID pour trouver les images / règle de nommage dossier=id et chaque image commence par l'id -->
                <?php
                $propieteImage = ['src' => '/public/assets/img/'.$route.'/'.$jeux[0]->Id_jeux.'/'.$jeux[0]->Id_jeux.'_Presentation1.jpg',
                    'alt'=>$jeux[0]->jeux_Nom,
                    'class'=>'item active', 'style'=>'width:100%;'];
                echo img($propieteImage);
                ?>
            </div>

            <div class="item">
                <?php
                $propieteImage = ['src' => '/public/assets/img/'.$route.'/'.$jeux[0]->Id_jeux.'/'.$jeux[0]->Id_jeux.'_Presentation2.jpg',
                    'alt'=>$jeux[0]->jeux_Nom,
                    'class'=>'item', 'style'=>'width:100%;'];
                echo img($propieteImage);
                ?>
            </div>

            <div class="item">
                <?php
                $propieteImage = ['src' => '/public/assets/img/'.$route.'/'.$jeux[0]->Id_jeux.'/'.$jeux[0]->Id_jeux.'_Presentation3.jpg',
                    'alt'=>$jeux[0]->jeux_Nom,
                    'class'=>'item', 'style'=>'width:100%;'];
                echo img($propieteImage);
                ?>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-6 video-box">
                    <?php
                    $propieteImage = ['src' => '/public/assets/img/'.$route.'/'.$jeux[0]->Id_jeux.'/'.$jeux[0]->Id_jeux.'_Presentation4.jpg',
                        'alt'=>$jeux[0]->jeux_Nom,
                        'class'=>'img','style'=>'width:100%; height:100%;'];
                    echo img($propieteImage);
                    ?>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

                    <div class="section-title">
                        <h2>Présentation</h2>
                        <p><?php echo $jeux[0]->jeux_Description?></div>

                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bx bx-folder"></i></div>
                        <h4 class="title">Catégorie</h4>
                        <p class="description"> <?php echo $jeux[0]->jeux_Categorie?> </div>

                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bx bx-play"></i></div>
                        <h4 class="title">Mode</h4>
                        <p class="description"><?php echo $jeux[0]->jeux_Mode?> </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End About Us Section -->

    <!-- ======= About Lists Section ======= -->
    <section class="about-lists">
        <div class="container">

            <div class="row no-gutters">

                <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up">
                    <span>01</span>
                    <h4>Date de sortie</h4>
                    <p><?php echo $jeux[0]->jeux_DateSortie?></p>
                </div>

                <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="100">
                    <span>02</span>
                    <h4>Développeur</h4>
                    <p><?php echo $jeux[0]->jeux_Developpeur?></p>
                </div>

                <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="200">
                    <span>03</span>
                    <h4> PEGI</h4>
                    <p><?php echo $jeux[0]->jeux_Pegi?></p>
                </div>
            </div>

        </div>
    </section><!-- End About Lists Section -->

<section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">

        <div class="text-center">
            <h3>Les règles du concours</h3>
            <p><?php echo $concours[0]->concours_Regles?></p>
        </div>

    </div>
</section>
    <!-- ======= parametre Section ======= -->
    <section id="parametre" class="parametre">
        <div class="container">

            <div class="section-title">
                <h2>Les paramètres</h2>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                    <h4 class="title"><a href="">Taille des équipes</a></h4>
                    <p class="description"><?php echo $concours[0]->concours_TailleEquipe?> </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                    <h4 class="title"><a href="">Paramètre d'équipe</a></h4>
                    <p class="description"><?php echo $concours[0]->concours_ParametresEquipe?></div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                    <h4 class="title"><a href="">Pause</a></h4>
                    <p class="description"><?php echo $concours[0]->concours_Pause?></div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                    <h4 class="title"><a href="">Support</a></h4>
                    <p class="description"><?php echo $concours[0]->concours_SupportZone?></div>
            </div>

        </div>
    </section><!-- End Services Section -->

