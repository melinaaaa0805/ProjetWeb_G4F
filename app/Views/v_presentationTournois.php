<?php ?>
<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <h1>La programmation des tournois</h1>
        <div class="container" data-aos="fade-up">
        <h2>Les Jeux Switch</h2>
        <h4> <?php echo $concoursSwitch[0]->concours_Nom; ?></h4><br>
       <?php foreach ($dateSwitch1 as $uneheure):
           $dateConv=strtotime($uneheure->Date_avoirLieu);
           $date=date('d/m',$dateConv);
           $heure=date('H:i',$dateConv);
           ?>

               <tr>
                   <td><h6><?php echo "Le ".$date.' | '.$heure?></h6>
                       <td><h6>Il reste <?php echo $uneheure->avoirlieu_PlacesRestantes; ?> place(s).</h6></td>
               </tr>
       <?php endforeach;?>
    </div>
    <div>
        <h4> <?php echo $concoursSwitch[1]->concours_Nom; ?></h4><br>
        <?php foreach ($dateSwitch2 as $uneheure):
            $dateConv=strtotime($uneheure->Date_avoirLieu);
            $date=date('d/m',$dateConv);
            $heure=date('H:i',$dateConv);
            ?>
                <tr>
                    <td><h6><?php echo "Le ".$date.' | '.$heure?></h6></td>
                </tr>
                <tr>
                    <td><h6>Il reste <?php echo $uneheure->avoirlieu_PlacesRestantes; ?> place(s).</h6></td>
                </tr>
        <?php endforeach;?>
    </div>
    <div>
        <h4>Le concours dépendra des votes</h4><br>

    </div></div>
    <div>
        <h2>Les Jeux Playstation</h2>
        <h4> <?php echo $concoursPlaystation[0]->concours_Nom; ?></h4><br>
        <?php foreach ( $datePlaystation1 as $uneheure):
            $dateConv=strtotime($uneheure->Date_avoirLieu);
            $date=date('d/m',$dateConv);
            $heure=date('H:i',$dateConv);
            ?>
                <tr>
                    <td><h6><?php echo "Le ".$date.' | '.$heure?></h6></td>
                </tr>
                <tr>
                    <td><h6>Il reste <?php echo $uneheure->avoirlieu_PlacesRestantes; ?> place(s).</h6></td>
                </tr>
        <?php endforeach;?>
    </div>
    <div>
        <h4> <?php echo  $concoursPlaystation[1]->concours_Nom; ?></h4><br>
        <?php foreach ( $datePlaystation2 as $uneheure):
            $dateConv=strtotime($uneheure->Date_avoirLieu);
            $date=date('d/m',$dateConv);
            $heure=date('H:i',$dateConv);
            ?>
                <tr>
                    <td><h6><?php echo "Le ".$date.' | '.$heure?></h6></td>
                </tr>
                <tr>
                    <td><h6>Il reste <?php echo $uneheure->avoirlieu_PlacesRestantes; ?> place(s).</h6></td>
                </tr>
        <?php endforeach;?>

    </div>
    <div>
        <h4>Le concours dépendra des votes</h4>


    </div>
    <div>
        <h2>Les Jeux Xbox</h2>
        <h4> <?php echo $concoursXbox[0]->concours_Nom; ?></h4><br>
        <?php foreach ($dateXbox2 as $uneheure):
            $dateConv=strtotime($uneheure->Date_avoirLieu);
            $date=date('d/m',$dateConv);
            $heure=date('H:i',$dateConv);
            ?>
                <tr>
                    <td><h6><?php echo "Le ".$date.' | '.$heure?></h6></td>
                </tr>
                <tr>
                    <td><h6>Il reste <?php echo $uneheure->avoirlieu_PlacesRestantes; ?> place(s).</h6></td>
                </tr>
        <?php endforeach;?>


    </div>
    <div>
        <h4> <?php echo $concoursXbox[1]->concours_Nom; ?></h4><br>
        <?php foreach ($dateXbox2 as $uneheure):
            $dateConv=strtotime($uneheure->Date_avoirLieu);
            $date=date('d/m',$dateConv);
            $heure=date('H:i',$dateConv);
        ?>
            <tr>
                <td><h6><?php echo "Le " .$date.' | '.$heure ?> </h6></td>
            </tr>
            <tr>
                <td><h6>Il reste <?php echo $uneheure->avoirlieu_PlacesRestantes; ?> place(s).</h6></td>
            </tr>
        <?php endforeach;?>

    </div>
    <div>
        <h4>Le concours dépendra des votes</h4>

    </div>
</div>
    </section></main>