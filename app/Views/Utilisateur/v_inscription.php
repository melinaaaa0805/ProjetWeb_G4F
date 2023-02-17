<section id="presentation" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
            <div class="col-xl-6 col-lg-8">
                <h1>Inscription<span>.</span></h1>
            </div>
            <div class="col-xl-6 col-lg-8" data-aos="fade-up">
            <!-- Récupération des différentes infos pour l'inscription *// -->
        <h4> <?php echo $titre ?></h4>
        <?= form_open(base_url() . "/public/ajoutUtilisateur"); ?>
        <label class="form-label" for="login">Login :</label>
        <input class="form-control mb-3" type="text" name="login" id="login"
               value="<?=set_value('login')?>" required>
        <?= $validation->getError('login');?><br><br>

        <label class="form-label" for="email">Email:</label>
        <input class="form-control mb-3" type="email" name="email" id="email"
               value="<?=set_value('email')?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
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
               value="<?=set_value('dateNaissance')?>" min="1920-01-01" max="2018-12-31" required>
        <?= $validation->getError('dateNaissance');?><br><br>

        <label class="form-label" for="password">Mot de passe:</label>
        <input class="form-control mb-4" type="password" name="password" id="password"
               value="<?= set_value('password')?>" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{12,}" required>
        <?= $validation->getError('password');?><br><br>

        <label class="form-label" for="password">Répeter le mot de passe : </label>
        <input class="form-control mb-4" type="password" name="password2" id="password2"
               value="<?=set_value('password2')?>" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{12,}" required>
        <?= $validation->getError('password2');?><br><br>

        <div class="d-flex justify-content-center">
            <input class="btn-btn" type="submit" name ="submit" value="Valider">
        </div>
        <a><?=anchor(
            base_url() . '/public/connexion/',
            'Déjà inscrit(e) ? Cliquez ici pour vous connecter.',
            ['class' => 'btn-btn']
        )?></a>

        <?= form_close(); ?>
            </div>
        </div>
    </div>
</section>

