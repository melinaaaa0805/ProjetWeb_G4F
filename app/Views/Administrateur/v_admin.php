<?php

?>
<section id="adminSection">
    <div class="container" data-aos="fade-up">
        <h1 class="text-center">Administration</h1>
        <h2>Liste des avis</h2>
        <?php
        if ($lesAvis != null) {
            ?>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Note</th>
                            <th>Commentaire</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($lesAvis as $unAvis) {
                        ?>
                        <tr>
                            <td><?= $unAvis['LoginUser_inscription'] ?></td>
                            <td><?= $unAvis['inscription_Avis'] ?>/5</td>
                            <td><?= $unAvis['inscription_AvisCommentaire'] ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
                <?php
        } else {
            ?>
            <p>Aucun avis n'a été publié pour le moment.</p>
            <?php
        }
        ?>
    </div>

</section>
