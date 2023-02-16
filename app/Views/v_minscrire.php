<main id="main">

    <script type="text/javascript" src="/public/assets/vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="/public/assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="/public/assets/js/js.js"></script>
    <script type="text/javascript" src="/public/assets/js/bootstrap.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="/public/assets/css/bootstrap.css">
    <script>function Affiche_liste(id_ensemble_select,id_select)
        {
            // Sélection du bloc contenant les sélections liées
            var id_ensemble_select2 = document.getElementById(id_ensemble_select);

            // Sélection de la sélection liée
            var id_select2 = document.getElementById(id_select);

            if(id_ensemble_select2)
            {
                //Initialisation d'une variable pour contenir un tableau.
                var tab = new Array();

                // Cherche les balises select inlues dans le bloc
                // contenant les sélections liées  et les retourne dans un tableau
                tab = id_ensemble_select2.getElementsByTagName('select');

                var tablength = tab.length;

                // Liste les éléments du tableau
                for (i=0; i < tablength; i++)
                {
                    // Met les selects en disable = true et les cache avec style.display = 'none'
                    tab[i].disabled = true;
                    if(id_select2) tab[i].style.display = 'none';// si select est vide on ne fait rien
                }

                // Met la sélection liée selectionne en disable = false et l'affiche avec style.display = 'inline'
                if(id_select2)
                {
                    id_select2.disabled = false;
                    id_select2.style.display = 'inline';
                }
            }

        } </script>
    <section id="presentation" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-6 col-lg-8">
                    <h1>M'inscrire <span>.</span></h1>
                </div>
                <div class="col-xl-6 col-lg-8" data-aos="fade-up">
                        <h2><?php
                        if ($titre == !null) {
                            echo $titre;
                            ?></h2>
                            <?=anchor(
                                base_url() . '/public/monespace/minscrire/',
                                'Rééssayer',
                                ['class' => 'btn-btn']
                            )?>
                            <?=anchor(
                                base_url() . '/public/monespace/inscription/',
                                'Retourner à mes inscriptions',
                                ['class' => 'btn-btn']
                            )?>
                        <?php } if ((isset($Concours)) and (isset($Switch))) {?>
                        <h2>Choisissez votre concours : </h2>
                    <form action = "#" method = "post">
                        <p> <?php foreach ($Concours as $unConcours) :
                            {?>
                        <div>
                            <label for="<?php echo $unConcours->Id_concours; ?>"><?php echo $unConcours->concours_Nom;
                            ?></label>
                            <input type="radio" id = "<?php echo $unConcours->Id_concours; ?>" name = "cat"
                                   value = "<?php echo $unConcours->concours_Nom; ?>" class = "categorie"
                                   onclick = "Affiche_liste(this.className,this.value)" />
                            <?php }?> </div>
                            <?php endforeach; ?>
                        </p>
                </form>
                            <?= form_open(base_url() . '/public/monespace/minscrireTournois'); ?>
                    <!-- AFFICHAGE DES ENREGISTREMENTS SÉLECTIONNÉES -->
                    <p style="font-style:italic">Sélectionnez la date et l'heure de votre choix : </p>
                    <p id = "categorie">
                            <?php foreach ($Concours as $unConcours) :
                                if ($unConcours->concours_SupportZone == "Switch") {
                                    $titre = $unConcours->concours_Nom; ?>
                            <label for="<?php echo $titre ?>"></label>
                            <select name="selection" id="<?php echo $titre ?>">
                                    <?php foreach ($Switch as $dateS) :
                                        if ($dateS->concours_Nom == $unConcours->concours_Nom) {
                                            $dateConv = strtotime($dateS->Date_avoirLieu);
                                            $date = date('d/m', $dateConv);
                                            $heure = date('H:i', $dateConv); ?>

                                <option value="<?php echo $dateS->avoirlieu_CodeReservation ?>">
                                            <?php echo 'Le ' . $date . ' | ' . $heure . ' Il reste ' .
                                            (int)($dateS->avoirlieu_PlacesRestantes);?> place(s).</option>
                                        <?php }
                                    endforeach;
                                }?>
                            </select>
                            <?php endforeach ;
                        }
                        if ((isset($Concours)) and (isset($Playstation))) {
                            foreach ($Concours as $unConcours) :
                                if ($unConcours->concours_SupportZone == 'Playstation') {
                                    $titre = $unConcours->concours_Nom; ?>
                            <select name="selection" id="<?php echo $titre; ?>">
                                        <?php  foreach ($Playstation as $dateP) :
                                            if ($dateP->concours_Nom == $unConcours->concours_Nom) {
                                                $dateConv = strtotime($dateP->Date_avoirLieu);
                                                $date = date('d/m', $dateConv);
                                                $heure = date('H:i', $dateConv);?>
                                    <option value="<?php echo $dateP->avoirlieu_CodeReservation ?>">
                                                <?php echo 'Le ' . $date . ' | ' . $heure . ' Il reste ' .
                                                    (int)($dateP->avoirlieu_PlacesRestantes);?> place(s).</option>
                                            <?php }
                                        endforeach;
                                }?>
                            </select>
                            <?php endforeach ;
                        }
                        if ((isset($Concours)) and (isset($Xbox))) {
                            foreach ($Concours as $unConcours) :
                                if ($unConcours->concours_SupportZone == "Xbox") {
                                    $titre = $unConcours->concours_Nom; ?>
                            <label for="<?php echo $titre; ?>"></label><select name="selection"
                                id="<?php echo $titre; ?>">
                                        <?php foreach ($Xbox as $dateX) :
                                            if ($dateX->concours_Nom == $unConcours->concours_Nom) {
                                                $dateConv = strtotime($dateX->Date_avoirLieu);
                                                $date = date('d/m', $dateConv);
                                                $heure = date('H:i', $dateConv); ?>
                                    <option value="<?php echo $dateX->avoirlieu_CodeReservation ?>">
                                                <?php echo "Le " . $date . ' | ' . $heure . " Il reste " .
                                                    (int)($dateX->avoirlieu_PlacesRestantes);?> place(s).</option>
                                            <?php }
                                        endforeach ;
                                } ?>
                            </select>
                            <?php endforeach;?>

                    </p>
                        <input class="btn-btn" type="submit" name ="submit" value="M'inscrire">
                        <?php }?>
                    <?= form_close(); ?>
                </div>
                    </div>
                </div>
    </section>
