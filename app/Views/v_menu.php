<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Favicons -->
    <link href="/public/assets/img/G4F.png" rel="icon">
    <link href="/public/assets/img/G4F.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,
    400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS -->
    <?php
     echo link_tag( 'public/assets/vendor/aos/aos.css');
//     echo link_tag( 'public/assets/vendor/icofont/icofont.min.css');
//     echo link_tag( 'public/assets/vendor/animate.css/animate.min.css');
//     echo link_tag( 'public/assets/vendor/venobox/venobox.css');
     echo link_tag( 'public/assets/vendor/bootstrap/css/bootstrap.min.css');
     echo link_tag( 'public/assets/vendor/bootstrap-icons/bootstrap-icons.css');
     echo link_tag( 'public/assets/vendor/boxicons/css/boxicons.min.css');
     echo link_tag( 'public/assets/vendor/glightbox/css/glightbox.min.css');
     echo link_tag( 'public/assets/vendor/remixicon/remixicon.css');
     echo link_tag( 'public/assets/vendor/swiper/swiper-bundle.min.css');
     echo link_tag( 'public/assets/css/style.css');
     echo link_tag( 'public/assets/css/css_jeux.css');
     ?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous"
            referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/timecircles/1.5.3/TimeCircles.min.js"
            integrity="sha512-FofOhk0jW4BYQ6CFM9iJutqL2qLk6hjZ9YrS2/OnkqkD5V4HFnhTNIFSAhzP3x//AD5OzVMO8dayImv06fq0jA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Template Main CSS -->

</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">
        <a href="#" class="logo me-auto me-lg-0">
                  <?php
            $propieteImage = ['src' => '/public/assets/img/G4F.png',
                'alt'=>"Geek4Fun",
                'class'=>'img-fluid'];
            echo img($propieteImage);
            ?>
        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a>
                        <?=anchor(base_url().'/public/', 'Accueil',['class' => 'nav-link scrollto active'])?></a></li>
                <li><a class="nav-link scrollto">
                        <?=anchor(base_url().'/public/', 'Section Cybersécurité',['class' => 'nav-link scrollto'])?></a></li>
                <li><a class="nav-link scrollto">
                        <?=anchor(base_url().'/public/', 'Section Cosplay',['class' => 'nav-link scrollto'])?></a></li>
                <li class="dropdown"><a><span>
                        <?=anchor(base_url().'/public/presentation', 'Section tournois',['class' => 'dropdown'])?></span> </a>
                    <ul>
                        <li><a><?=anchor(base_url().'/public/', 'Présentation')?></a></li>
                        <li><a><?=anchor(base_url().'/public/espaceNintendo/', 'Espace Nintendo')?></a></li>
                        <li><a><?=anchor(base_url().'/public/', 'Espace Next GEN')?></a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto"><?=anchor(base_url().'/public/', 'Nous contacter',['class' => 'nav-link scrollto'])?></a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <?= anchor(base_url()."/public/inscription", "S'inscrire / Se connecter", ['class' => 'get-started-btn scrollto']) ?>

    </div>
</header><!-- End Header -->
