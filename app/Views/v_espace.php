<section class="mt-5 pb-5">
    <h1 class="text-center">Mes informations</h1>
    <div class="w-50 mx-auto">
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

        <label class="form-label" for="password">Mot de passe :</label>
        <input class="form-control mb-4" type="password" name="password" id="password"
               disabled value="<?php echo session()->get('password');?>" required>

