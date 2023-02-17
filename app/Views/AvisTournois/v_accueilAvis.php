<section id="presentation" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
            <div class="col-xl-6 col-lg-8">
                <h1>Mes avis<span>.</span></h1>
                <?php if (isset($titre)) {?>
                    <h4><?php
                        echo $titre; ?>
                    </h4>
                <?php } ?>
            </div>
            <div class="col-xl-6 col-lg-8" data-aos="fade-up">
                <h6><?php if (isset($message)) {
                        echo $message;
                    }?></h6>
                <h3>Retrouvez vos avis ici</h3>
                <!-- création d'un tableau pour afficher les avis -->
                <div class="text-center">
                <div class="tabAvis">
                    <table class="table table-hover table-bordered">
                        <tbody>
                        <tr>
                            <td>Concours</td>
                            <td>Date</td>
                            <td>Avis ( /5)</td>
                            <td>Commentaire</td>
                        </tr>
                        </tbody>
                        <?php if (!isset($mesAvis[0])) {?>
                            Vous n'étiez inscrit à aucun concours, vous ne pouvez donc pas donner votre avis.
                        <?php   } else {?>
                        <tr> <?php foreach ($mesAvis as $unAvis) :

                            if ($unAvis->inscription_Avis == null) {?>
                            <td><?php echo $unAvis->concours_Nom;?></td>
                            <td><?php $dateConv = strtotime($unAvis->Date_avoirLieu);
                            $date = date('d/m', $dateConv);
                            $heure = date('H:i', $dateConv);
                            echo 'Le ' . $date . ' | ' . $heure ;?></td>
                            <td><?=anchor(
                                base_url() . '/public/monespace/donnermonavis/',
                                'Donnez votre avis'
                                );?> </td>
                            <td> </td>
                        </tr>
                            <?php } else {?>
                        <tr>
                            <td><?php echo $unAvis->concours_Nom;?></td>
                            <td><?php $dateConv = strtotime($unAvis->Date_avoirLieu);
                                $date = date('d/m', $dateConv);
                                $heure = date('H:i', $dateConv);
                                echo 'Le ' . $date . ' | ' . $heure ;?></td>
                            <td><?php echo $unAvis->inscription_Avis ;?></td>
                            <td><?php echo $unAvis->inscription_AvisCommentaire ;?></td>
                            <?php } ?>
                                </tr>
                            <?php endforeach; } ?>

                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
