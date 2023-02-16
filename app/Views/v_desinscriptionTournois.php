<section id="presentation" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
            <div class="col-xl-6 col-lg-8">
                <h1>Me désinscrire <span>.</span></h1>
            </div>
            <div class="col-xl-6 col-lg-8" data-aos="fade-up">
                <h4>Sélectionner le concours pour lequel vous souhaitez vous désinscrire</h4> <br>
                        Vous êtes inscrit(e) : <br>
                        <?= form_open(base_url() . '/public/monespace/desinscription'); ?>
                        <select name="selection">
                                <?php foreach ($inscription as $uneInscript) :
                                    $dateConv = strtotime($uneInscript->Date_avoirLieu);
                                    $date = date('d/m', $dateConv);
                                    $heure = date('H:i', $dateConv);?>
                        <option value="<?php echo $uneInscript->CodeReservation_inscription ?>">
                                    <?php echo $uneInscript->concours_Nom . " Le " . $date . ' | ' . $heure ?></option>
                                <?php endforeach;?>
                        </select>
                        <input class="btn-btn" type="submit" name ="submit"
                               value="Me désinscrire">
                    <?= form_close(); ?>
            </div>
                </div>
            </div>
    </section><!-- End About Section -->
