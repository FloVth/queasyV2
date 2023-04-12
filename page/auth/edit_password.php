<!--Login-->
<form action="index_queasy.php?route=edit_password" method="post">

    <!--LABEL MOT DE PASSE ACTUEL-->
    <div class="wrappper">
        <div class="content">
            <div class="box">
                <label for="mot_pde_passe_actuel">Mot de passe actuel : </label>
            </div>
        </div>
        <!-- INPUT MOT DE PASSE ACTUEL-->
        <div class="box">
            <input type="text" class="myinput" name="mot_pde_passe_actuel" placeholder="Entrez votre mot passe " required>
        </div>

        <!--ESPACE-->
        <div class="zone-espace">
            <div class="spacing"></div>
            <div class="spacing"></div>
            <div class="spacing"></div>
        </div>

        <!--LOGIN NOUVEAU MOT DE PASSE-->
        <div class="box">
            <label for="nouveau_mot_de_passe"> Nouveau mot de passe :</label>
        </div>
        <!--INPUT NOUVEAU MOT DE PASSE-->
        <div class="box">
            <input type="password" class="myinput" name="nouveau_mot_de_passe"  placeholder="Nouveau mot de passe" required>
        </div>

        <!--ESPACE-->
        <div class="zone-espace">
            <div class="spacing"></div>
            <div class="spacing"></div>
            <div class="spacing"></div>
        </div>

        <!--LOGIN CONFIRMATION MOT DE PASSE-->
        <div class="box">
            <label for="confirmation_mot_de_passe"> Confirmation mot de passe :</label>
        </div>
        <!--INPUT CONFIRMATION MOT DE PASSE-->
        <div class="box">
            <input type="password" class="myinput" name="confirmation_mot_de_passe"  placeholder="Nouveau mot de passe" required>
        </div>

        <!--ESPACE-->
        <div class="zone-espace">
            <div class="spacing"></div>
            <div class="spacing"></div>
            <div class="spacing"></div>
        </div>
        
        <!--Bouton-->
        <div class="box">
            <div class="button">
            <button type="submit" class='btn'>Accéder à mon profil ! </button>
            </div>
        </div>
    </div>
</form>
