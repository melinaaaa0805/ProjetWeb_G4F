<?php ?>
<section class="mt-5 pb-5">
    <h1 class="text-center">Voter</h1>
    <h4> <?php echo $titre ?></h4>
    <div class="w-50 mx-auto">
        <?= form_open(base_url()."/public/monvote"); ?>
    <label for="lang">Language</label>
    <select name="languages" id="lang" size="4">
        <option value="javascript">JavaScript</option>
        <option value="php">PHP</option>
        <option value="java">Java</option>
        <option value="golang">Golang</option>
        <option value="python">Python</option>
        <option value="c#">C#</option>
        <option value="C++">C++</option>
        <option value="erlang">Erlang</option>
    </select>
        <div class="d-flex justify-content-center">
            <input class="btn btn-success mx-auto fs-4 py-1 px-3" type="submit" name ="submit" value="Valider">
        </div>
    </div>
</section>
