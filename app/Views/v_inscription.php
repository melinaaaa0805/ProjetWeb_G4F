<?php
    $session = \Config\Services::session();?>
<!-- Récupération des différentes infos pour l'inscription *// -->
    <section class="mt-5 pb-5">
    <h1 class="text-center">Inscription</h1>
        <h4> <?php echo $titre ?></h4>
    <div class="w-50 mx-auto">
        <?= form_open(base_url()."/public/ajoutUtilisateur"); ?>
        <label class="form-label" for="login">Login :</label>
        <input class="form-control mb-3" type="text" name="login" id="login"
               value="<?=set_value('login')?>" required>
        <?= $validation->getError('login');?><br><br>

        <label class="form-label" for="email">Email:</label>
        <input class="form-control mb-3" type="email" name="email" id="email"
               value="<?=set_value('email')?>"required>
        <?= $validation->getError('email');?><br><br>

        <label class="form-label" for="nom">Nom:</label>
        <input class="form-control mb-3" type="text" name="nom" id="nom"
               value="<?= set_value('nom')?>" required>
        <?= $validation->getError('nom');?><br><br>

        <label class="form-label" for="prenom">Prénom:</label>
        <input class="form-control mb-3" type="text" name="prenom" id="prenom"
               value="<?= set_value('prenom')?>" required>
        <?= $validation->getError('prenom');?><br><br>

        <label class="form-label" for="dateNaissance">Date de naissance:</label>
        <input class="form-control mb-3" type="date" name="dateNaissance" id="dateNaissance"
               value="<?=set_value('dateNaissance')?>"required>
        <?= $validation->getError('dateNaissance');?><br><br>

        <label class="form-label" for="password">Mot de passe:</label>
        <input class="form-control mb-4" type="password" name="password" id="password"
               value="<?= set_value('password')?>"required>
        <?= $validation->getError('password');?><br><br>

        <label class="form-label" for="password">Répeter le mot de passe : </label>
        <input class="form-control mb-4" type="password" name="password2" id="password2"
               value="<?=set_value('password2')?>" required>
        <?= $validation->getError('password2');?><br><br>

        <div class="d-flex justify-content-center">
            <input class="btn btn-success mx-auto fs-4 py-1 px-3" type="submit" name ="submit" value="Valider">
        </div>
        <a><?=anchor(base_url().'/public/connexion', 'Déjà inscrit(e) ? Cliquez ici pour vous connecter.')?></a>

        <?= form_close(); ?>
    </div>
</section>

