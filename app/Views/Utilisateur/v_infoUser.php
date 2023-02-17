    <section id="presentation" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-6 col-lg-8">
                    <h1>Mes informations<span>.</span></h1>
                    <?php if (isset($titre)) {?>
                        <h4><?php
                            echo $titre; ?>
                        </h4>
                    <?php } ?>
                </div>

    <!-- Affichage des informations de l'utilisateur -->
    <div class="col-xl-6 col-lg-8" data-aos="fade-up">
        <label class="form-label" for="pseudo">Pseudo :</label>
        <input class="form-control mb-3" type="text" name="pseudo" id="pseudo"
               disabled value="<?php echo session()->get('login');?>" required>

        <label class="form-label" for="email">Email :</label>
        <input class="form-control mb-3" type="email" name="email" id="email"
               disabled value="<?php echo session()->get('email');?>" required>

        <label class="form-label" for="nom">Nom :</label>
        <input class="form-control mb-3" type="text" name="nom" id="nom"
               disabled value="<?php echo session()->get('nom');?>" required>

        <label class="form-label" for="prenom">Prénom :</label>
        <input class="form-control mb-3" type="text" name="prenom" id="prenom"
               disabled value="<?php echo session()->get('prenom');?>" required>

        <label class="form-label" for="dateNaissance">Date de naissance :</label>
        <input class="form-control mb-3" type="date" name="dateNaissance" id="dateNaissance"
               disabled value="<?php echo session()->get('dateNaissance');?>" required>

    <?= anchor(base_url() . '/public/modification/', 'Modifier mes infos', ['class' => 'get-started-btn scrollto']) ?>
    <?= anchor(base_url() . '/public/suppression/', 'Supprimer mon compte', ['class' => 'get-started-btn scrollto']) ?>
    </div>
    </div>
    </div>
    </section>
