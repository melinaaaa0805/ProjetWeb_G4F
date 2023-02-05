<?php ?>
<div>
    <div>
        <h1>Les Jeux Switch</h1>
        <h4> <?php echo $concoursSwitch[0]->concours_Nom; ?></h4>
       <?php foreach ($dateSwitch1 as $uneheure):
       ?>
        <div class="d-flex justify-content-center">
            <input class="btn btn-success mx-auto fs-4 py-1 px-3" type="submit" name="<?php
            $uneheure->IdConcours_avoirLieu?>" value="<?php
            $uneheure->Date_avoirLieu ?>">
        </div>
        <?php endforeach;?>
    </div>
    <div>
        <h4> <?php echo $concoursSwitch[1]->concours_Nom; ?></h4>
        <?php foreach ($dateSwitch2 as $uneheure):
        ?>
        <div class="d-flex justify-content-center">
            <input class="btn btn-success mx-auto fs-4 py-1 px-3" type="submit" name="<?php
            $uneheure->IdConcours_avoirLieu?>" value="<?php
            $uneheure->Date_avoirLieu ?>">
        </div>
        <?php endforeach;?>
    </div>
    <div>
        <h4>Le concours dépendra des votes</h4>

    </div>
    <div>
        <h1>Les Jeux Playstation</h1>
        <h4> <?php echo $concoursPlaystation[0]->concours_Nom; ?></h4>
        <?php foreach ( $datePlaystation1 as $uneheure):
        ?>
        <div class="d-flex justify-content-center">
            <input class="btn btn-success mx-auto fs-4 py-1 px-3" type="submit" name="<?php
            $uneheure->IdConcours_avoirLieu?>" value="<?php
            $uneheure->Date_avoirLieu ?>">
        </div>
        <?php endforeach;?>
    </div>
    <div>
        <h4> <?php echo  $concoursPlaystation[1]->concours_Nom; ?></h4>
        <?php foreach ( $datePlaystation2 as $uneheure):
        ?>
        <div class="d-flex justify-content-center">
            <input class="btn btn-success mx-auto fs-4 py-1 px-3" type="submit" name="<?php
            $uneheure->IdConcours_avoirLieu?>" value="<?php
            $uneheure->Date_avoirLieu ?>">
        </div>
        <?php endforeach;?>

    </div>
    <div>
        <h4>Le concours dépendra des votes</h4>


    </div>
    <div>
        <h1>Les Jeux Xbox</h1>
        <h4> <?php echo $concoursXbox[0]->concours_Nom; ?></h4>
        <?php foreach ($dateXbox1 as $uneheure):
        ?>
        <div class="d-flex justify-content-center">
            <input class="btn btn-success mx-auto fs-4 py-1 px-3" type="submit" name="<?php
            $uneheure->IdConcours_avoirLieu?>" value="<?php
            $uneheure->Date_avoirLieu ?>">
        </div>
        <?php endforeach;?>

    </div>
    <div>
        <h4> <?php echo $concoursXbox[1]->concours_Nom; ?></h4>
        <?php foreach ($dateXbox2 as $uneheure):
        ?>
        <div class="d-flex justify-content-center">
            <input class="btn btn-success mx-auto fs-4 py-1 px-3" type="submit" name="<?php
            $uneheure->IdConcours_avoirLieu?>" value="<?php
            $uneheure->Date_avoirLieu ?>">
        </div>
        <?php endforeach;?>

    </div>
    <div>
        <h4>Le concours dépendra des votes</h4>
        
    </div>
</div>
