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
            <input type="text" class="myinput" id="mot_de_passe_actuel" placeholder="Entrez votre mot passe " required/>
            <span id="mot_de_passe_actuel_erreur" class="cache couleur_obligation_message_erreur">Votre mot de passe n'est pas le même</span>
            <span id="mot_de_passe_actuel_vide" class="cache couleur_obligation_message_erreur">Saisie invalide</span>
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
            <input type="password" class="myinput" id="nouveau_mot_de_passe"  placeholder="Nouveau mot de passe" required/>
            <span id="nouveau_mot_de_passe_erreur" class="cache couleur_obligation_message_erreur">Votre mot de passe doit contenir des lettres et des chiffres</span>
            <span id="nouveau_mot_de_passe_vide" class="cache couleur_obligation_message_erreur">Saisie invalide</span>
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
            <input type="password" class="myinput" id="confirmation_mot_de_passe"  placeholder="Nouveau mot de passe" required/>
            <span id="confirmation_mot_de_passe_erreur" class="cache couleur_obligation_message_erreur">Votre mot de passe n'est pas le même que celui saisie précedement</span>
            <span id="confirmation_mot_de_passe_vide" class="cache couleur_obligation_message_erreur">Saisie invalide</span>
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
