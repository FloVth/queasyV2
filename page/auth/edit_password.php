    <?php 
    session_start();

    if (isset($_SESSION['id_user'])&& isset($_SESSION['nom_user'])){    ?>
    <title>QUEASY | Modifier mot de passe</title>
    <form action ="edit-password.php" method="post">
        <!--Titre page-->
        <h2>Changer votre mot de passe</h2>
        <?php if(isset($_GET[('error')])) {?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?> 

        <?php if(isset($_GET['succes'])){ ?>
            <p class="succes"><?php echo $_GET ['succes']; ?></p>
        <?php } ?>

        <!--LABEL ANCIEN MOT DE PASSE-->
        <div class="wrappper">
            <div class="content">
                <div class="box">
                    <label for="ancien_mot_de_passe">Ancien mot de passe :</label>
                </div>
            </div>
            <!--INPUT ANCIEN MOT DE PASSE-->
            <div class="box">
                <input type="text" class="myinput" name="ancien_mot_de_passe" placeholder="Entrez votre nom"/>
            </div>

            <!--ZONE ESPACE-->
            <div class="zone-espace">
                <div class="spacing"></div>
                <div class="spacing"></div>
            </div>


            <!--LABEL NOUVEAU MOT DE PASSE-->
            <div class="box">
                <label for="nouveau_mot_de_passe">Nouveau mot de passe :</label>
            </div>
            <!--INPUT NOUVEAU MOT DE PASSE-->
            <div class="box">
                <input type="password" class="myinput" name="nouveau_mot_de_passe" placeholder="Nouveau mot de passe"/>
            </div>

            <!--ZONE ESPACE-->
            <div class="zone-espace">
                <div class="spacing"></div>
                <div class="spacing"></div>
            </div>


            <!--LABEL CONFIRMATION MOT DE PASSE-->
            <div class="box">
                <label for="confirmation_mot_de_passe">confirmation du nouveau mot de passe :</label>
            </div>
            <!--INPUT CONFIRMATION MOT DE PASSE-->
            <div class="box">
                <input type="password" class="myinput" name="confirmation_mot_de_passe" placeholder="Confirmation du mot de passe"/>
            </div>

            <!--ZONE ESPACE-->
                <div class="zone-espace">
                <div class="spacing"></div>
                <div class="spacing"></div>
            </div>

            <!--Bouton-->
            <div class="box">
                <div class="button">
                <a href='index_queasy.php?route=accueil_eleve' class="btn">Changer de mot de passe </a>
                <a href='index_queasy.php?route=accueil_eleve' class="btn">Menu ! <i class="fa-solid fa-house-chimney"></i> </a>
                </div>
                
            </div>
        </div>
    </form>
<?php 
}else{
    header("location:index_queasy.php?route=login");
}?>