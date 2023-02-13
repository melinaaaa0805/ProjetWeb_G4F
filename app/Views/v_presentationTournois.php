<?php ?>
<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <h1>La programmation des tournois</h1>
        <div>
        <h2>Les Jeux Switch</h2>
         <?php foreach ($Switch as $dateS):{?>
             <h4><?php echo $dateS->concours_Nom; ?></h4><br>
       <?php
           $dateConv=strtotime($dateS->Date_avoirLieu);
           $date=date('d/m',$dateConv);
           $heure=date('H:i',$dateConv);
           ?>
               <tr>
                   <td><h6><?php echo "Le ".$date.' | '.$heure?></h6>
                       <td><h6>Il reste <?php echo (int)($dateS->avoirlieu_PlacesRestantes); ?> place(s).</h6></td>
               </tr>
       <?php } endforeach; ?>
    </div>
    <div>
        <h4>Le concours dépendra des votes</h4><br>

    </div>
    <div>
        <h2>Les Jeux Playstation</h2>
         <?php foreach ($Playstation as $dateP):
        ?>
           <h4><?php echo $dateP->concours_Nom; ?></h4><br>
        <?php $dateConv=strtotime($dateP->Date_avoirLieu);
            $date=date('d/m',$dateConv);
            $heure=date('H:i',$dateConv);
            ?>
                <tr>
                    <td><h6><?php echo "Le ".$date.' | '.$heure?></h6></td>
                </tr>
                <tr>
                    <td><h6>Il reste <?php echo $dateP->avoirlieu_PlacesRestantes; ?> place(s).</h6></td>
                </tr>
        <?php  endforeach; ?>
    </div>
    <div>
        <h4>Le concours dépendra des votes</h4>


    </div>
    <div>
        <h2>Les Jeux Xbox</h2>
         <?php foreach ($Xbox as $dateX):?>
        <h4><?php echo $dateX->concours_Nom; ?></h4><br>
             <?php
            $dateConv=strtotime($dateX->Date_avoirLieu);
            $date=date('d/m',$dateConv);
            $heure=date('H:i',$dateConv);
            ?>
                <tr>
                    <td><h6><?php echo "Le ".$date.' | '.$heure?></h6></td>
                </tr>
                <tr>
                    <td><h6>Il reste <?php echo $dateX->avoirlieu_PlacesRestantes; ?> place(s).</h6></td>
                </tr>
        <?php endforeach;?>


    </div>
    <div>
        <h4>Le concours dépendra des votes</h4>

    </div>
</div>
    </section></main>