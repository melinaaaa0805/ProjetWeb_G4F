<?php ?>
<section class="mt-5 pb-5">
    <h1 class="text-center">Voter</h1>
    <div class="w-50 mx-auto">
        <?= form_open(base_url()."/public/monvote"); ?>
    <label for="jeux">Les jeux</label>
    <select name="jeux" id="jeux" size="4">
        <option value="<?php echo $jeux[0]->jeux_Nom?>>"><?php echo $jeux[0]->jeux_Nom?></option>
        <option value="<?php echo $jeux[1]->jeux_Nom?>"><?php echo $jeux[1]->jeux_Nom?></option>
        <option value="<?php echo $jeux[2]->jeux_Nom?>"><?php echo $jeux[2]->jeux_Nom?></option>
    </select>
        <div class="d-flex justify-content-center">
            <input class="btn btn-success mx-auto fs-4 py-1 px-3" type="submit" name ="submit" value="Valider">
        </div>
    </div>
</section>
