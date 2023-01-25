<?php
form_open(base_url()."/inscription");
?>
<section>
    <div class="container">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <label for="password">Mot de passe:</label>
        <input type="password" name="password" id="password">
    </div>
</section>

<?php

form_close();?>
