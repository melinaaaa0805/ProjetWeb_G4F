<?php ?>
<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
    <div>
        <h1>Les Jeux Switch</h1>
        <h4> <?php echo $concoursSwitch[0]->concours_Nom; ?></h4><br>
       <?php foreach ($dateSwitch1 as $uneheure):
           $dateConv=strtotime($uneheure->Date_avoirLieu);
           $date=date('d/m',$dateConv);
           $heure=date('H:i',$dateConv);
           ?>
               <tr>
                   <td><input class="btn" type="submit" name="<?php echo
                       $uneheure->IdConcours_avoirLieu?>" value="Le <?php echo $date.' | '.$heure?>"</td>
               </tr>
               <tr>
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
                    <td><input class="btn" type="submit" name="<?php echo
                        $uneheure->IdConcours_avoirLieu?>" value="Le <?php echo $date.' | '.$heure?>"</td>
                </tr>
                <tr>
                    <td><h6>Il reste <?php echo $uneheure->avoirlieu_PlacesRestantes; ?> place(s).</h6></td>
                </tr>
        <?php endforeach;?>
    </div>
    <div>
        <h4>Le concours dépendra des votes</h4><br>

    </div>
    <div>
        <h1>Les Jeux Playstation</h1>
        <h4> <?php echo $concoursPlaystation[0]->concours_Nom; ?></h4><br>
        <?php foreach ( $datePlaystation1 as $uneheure):
            $dateConv=strtotime($uneheure->Date_avoirLieu);
            $date=date('d/m',$dateConv);
            $heure=date('H:i',$dateConv);
            ?>
                <tr>
                    <td><input class="btn" type="submit" name="<?php echo
                        $uneheure->IdConcours_avoirLieu?>" value="Le <?php echo $date.' | '.$heure?>"</td>
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
                    <td><input class="btn" type="submit" name="<?php echo
                        $uneheure->IdConcours_avoirLieu?>" value="Le <?php echo $date.' | '.$heure?>"</td>
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
        <h1>Les Jeux Xbox</h1>
        <h4> <?php echo $concoursXbox[0]->concours_Nom; ?></h4><br>
        <?php foreach ($dateXbox2 as $uneheure):
            $dateConv=strtotime($uneheure->Date_avoirLieu);
            $date=date('d/m',$dateConv);
            $heure=date('H:i',$dateConv);
            ?>
                <tr>
                    <td><input class="btn" type="submit" name="<?php echo
                        $uneheure->IdConcours_avoirLieu?>" value="Le <?php echo $date.' | '.$heure?>"</td>
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
                <td><input class="btn" type="submit" name="<?php echo
                    $uneheure->IdConcours_avoirLieu?>" value="Le <?php echo $date.' | '.$heure?>"</td>
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