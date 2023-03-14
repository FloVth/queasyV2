<!--Text-->
<div class="Votre_Espace">Connectez-vous ! </div>

<!--Login-->
<form action="index_queasy.php?route=checklogin" method="post">

    <!--LABEL NOM-->
    <div class="wrappper">
        <div class="content">
            <div class="box">
                <label for="Nom">Nom :</label>
            </div>
        </div>

        <!--LOGIN INPUT -->
        <div class="box">
            <input type="text" class="myinput" name="Nom" placeholder="Entrez votre nom" required>
        </div>

        <!--LOGIN MOT DE PASSE-->
        <div class="box">
            <label for="mot_de_passe">Mot de passe :</label>
        </div>

        <!--INPUT MOT DE PASSE-->
        <div class="box">
            <input type="password" class="myinput" name="mot_de_passe"  placeholder="Entrez votre mot de passe" required>
        </div>

        <!--Bouton-->
        <div class="box">
            <div class="button">
            <button type="submit" class='btn'>Accéder à mon profil ! </button>
            </div>
        </div>
    </div>
</form>
