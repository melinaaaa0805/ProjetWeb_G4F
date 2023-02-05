<?php ?>
<div>
    <div>
        <h1>Les Jeux Switch</h1>
        <h4> <?php echo $jeux[0]; ?></h4>
       <?php foreach ($horaire as $uneheure):
       ?>
        <div class="d-flex justify-content-center">
            <input class="btn btn-success mx-auto fs-4 py-1 px-3" type="submit" name="<?php
            $uneheure->IdConcours_avoirLieu?>" value="<?php
            $uneheure->Date_avoirLieu ?>">
        </div>
        <?php endforeach;?>
    </div>
    <div>
        <h4> <?php echo $jeux[1]; ?></h4>
        <?php foreach ($horaire as $uneheure):
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
        <?php foreach ($horaire as $uneheure):
        ?>
        <div class="d-flex justify-content-center">
            <input class="btn btn-success mx-auto fs-4 py-1 px-3" type="submit" name="<?php
            $uneheure->IdConcours_avoirLieu?>" value="<?php
            $uneheure->Date_avoirLieu ?>">
        </div>
        <?php endforeach;?>
    </div>
    <div>
        <h1>Les Jeux Playstation</h1>
        <h4> <?php echo $jeux[0]; ?></h4>
        <?php foreach ($horaire as $uneheure):
        ?>
        <div class="d-flex justify-content-center">
            <input class="btn btn-success mx-auto fs-4 py-1 px-3" type="submit" name="<?php
            $uneheure->IdConcours_avoirLieu?>" value="<?php
            $uneheure->Date_avoirLieu ?>">
        </div>
        <?php endforeach;?>
    </div>
    <div>
        <h4> <?php echo $jeux[0]; ?></h4>
        <?php foreach ($horaire as $uneheure):
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
        <?php foreach ($horaire as $uneheure):
        ?>
        <div class="d-flex justify-content-center">
            <input class="btn btn-success mx-auto fs-4 py-1 px-3" type="submit" name="<?php
            $uneheure->IdConcours_avoirLieu?>" value="<?php
            $uneheure->Date_avoirLieu ?>">
        </div>
        <?php endforeach;?>

    </div>
    <div>
        <h1>Les Jeux Xbox</h1>
        <h4> <?php echo $jeux[0]; ?></h4>
        <?php foreach ($horaire as $uneheure):
        ?>
        <div class="d-flex justify-content-center">
            <input class="btn btn-success mx-auto fs-4 py-1 px-3" type="submit" name="<?php
            $uneheure->IdConcours_avoirLieu?>" value="<?php
            $uneheure->Date_avoirLieu ?>">
        </div>
        <?php endforeach;?>

    </div>
    <div>
        <h4> <?php echo $jeux[0]; ?></h4>
        <?php foreach ($horaire as $uneheure):
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
        <?php foreach ($horaire as $uneheure):
        ?>
        <div class="d-flex justify-content-center">
            <input class="btn btn-success mx-auto fs-4 py-1 px-3" type="submit" name="<?php
            $uneheure->IdConcours_avoirLieu?>" value="<?php
            $uneheure->Date_avoirLieu ?>">
        </div>
        <?php endforeach;?>
    </div>
</div>
