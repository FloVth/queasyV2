<!--Login-->
<form action="index_queasy.php?route=edit_password" method="post">

    <!--LABEL ANCIEN MOT DE PASSE-->
    <div class="wrappper">
        <div class="content">
            <div class="box">
                <label for="ancien_mot_de_passe">Ancien mot de passe :</label>
            </div>
        </div>
        <!--INPUT ANCIEN MOT DE PASSE-->
        <div class="box">
            <input type="text" class="myinput" name="ancien_mot_de_passe" id="ancien_mot_de_passe" placeholder="Entrez votre nom" required/>
        </div>


        <!--LABEL NOUVEAU MOT DE PASSE-->
        <div class="box">
            <label for="nouveau_mot_de_passe">Nouveau mot de passe :</label>
        </div>
        <!--INPUT NOUVEAU MOT DE PASSE-->
        <div class="box">
            <input type="password" class="myinput" name="nouveau_mot_de_passe" id="nouveau_mot_de_passe"  placeholder="Nouveau mot de passe" required/>
        </div>


        <!--LABEL CONFIRMATION MOT DE PASSE-->
         <div class="box">
            <label for="confirmation_mot_de_passe">confirmation du nouveau mot de passe :</label>
        </div>
        <!--INPUT CONFIRMATION MOT DE PASSE-->
        <div class="box">
            <input type="password" class="myinput" name="confirmation_mot_de_passe" id="confirmation_mot_de_passe"  placeholder="Confirmation du mot de passe" required>
        </div>


        <!--Bouton-->
        <div class="box">
            <div class="button">
            <button type="submit" class='btn'>Accéder à mon profil ! </button>
            </div>
        </div>
    </div>
</form>
