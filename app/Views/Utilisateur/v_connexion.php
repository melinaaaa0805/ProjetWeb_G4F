<!--Formulaire de connexion -->

<section id="presentation" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
            <div class="col-xl-6 col-lg-8">
                <h1>Connexion<span>.</span></h1>
            </div>
            <div class="col-xl-6 col-lg-8" data-aos="fade-up">
    <div class="text-center">
    <h4> <?php echo $titre ?></h4>
        <?= form_open(base_url() . '/public/login'); ?>
        <label class="form-label" for="pseudo">Login :</label>
        <input class="form-control mb-3" type="text" name="login" id="login"
               value="<?= set_value('login')?>"required>

        <label class="form-label" for="password">Mot de passe :</label>
        <input class="form-control mb-4" type="password" name="password" id="password"
               value="<?= set_value('password')?>" required>

            <input class="btn-btn" type="submit" name="submit" value="Se connecter">
        <?= form_close(); ?>
    </div>
</section>
