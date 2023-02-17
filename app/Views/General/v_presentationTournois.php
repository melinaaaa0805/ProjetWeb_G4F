<section id="presentation" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
            <div class="col-xl-6 col-lg-8">
                <h1>Le programme<span>.</span></h1>
            <div class="text-center">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th colspan="3">Les jeux Switch</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Concours</td>
                        <td>Date</td>
                        <td>Places restantes</td>
                    </tr>
                    </tbody>
                    <?php foreach ($Switch as $dateS) :?>
                        <tr>
                            <td><?php echo $dateS->concours_Nom; ?></td><br>
                            <?php
                            $dateConv = strtotime($dateS->Date_avoirLieu);
                            $date = date('d/m', $dateConv);
                            $heure = date('H:i', $dateConv); ?>
                            <td><h6><?php echo "Le " . $date . ' | ' . $heure?></h6>
                            <td><h6>Il reste <?php echo (int)($dateS->avoirlieu_PlacesRestantes); ?> place(s).</h6></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th colspan="3">Les jeux Playstation</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Concours</td>
                        <td>Date</td>
                        <td>Places restantes</td>
                    </tr>
                    </tbody>
                    <?php foreach ($Playstation as $dateP) :?>
                        <tr>
                            <td><?php echo $dateP->concours_Nom; ?></td>
                            <?php $dateConv = strtotime($dateP->Date_avoirLieu);
                            $date = date('d/m', $dateConv);
                            $heure = date('H:i', $dateConv); ?>
                            <td><h6><?php echo "Le " . $date . ' | ' . $heure?></h6></td>
                            <td><h6>Il reste <?php echo $dateP->avoirlieu_PlacesRestantes; ?> place(s).</h6></td>
                        </tr>
                    <?php  endforeach; ?>
                </table>
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th colspan="3"> Les jeux Xbox</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Concours</td>
                        <td>Date</td>
                        <td>Places restantes</td>
                    </tr>
                    </tbody>
                    <?php foreach ($Xbox as $dateX) :?>
                        <tr>
                            <td><?php echo $dateX->concours_Nom; ?></td><br>
                            <?php $dateConv = strtotime($dateX->Date_avoirLieu);
                            $date = date('d/m', $dateConv);
                            $heure = date('H:i', $dateConv); ?>
                            <td><h6><?php echo "Le " . $date . ' | ' . $heure?></h6></td>
                            <td><h6>Il reste <?php echo $dateX->avoirlieu_PlacesRestantes; ?> place(s).</h6></td>
                        </tr>
                    <?php endforeach;?>
                </table>
            </div>
            </div>
        </div>
    </div>
</section>

