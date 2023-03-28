
    <head>
        <link rel="shortcut icon" href="Logo-QUEASY.png"/>
        <title>QUEASY | Espace élève</title>
    </head>
    <body>
        <!--LOGO DU QUEASY-->
        <!--TEXT VOTRE ESPACE-->
        <div class="Votre_Espace">Votre espace</div>
        <!--Zone espace-->
        <div class="zone-espace">
            <div class="spacing"></div>
            <div class="spacing"></div>
            <div class="spacing"></div>
            <div class="spacing"></div>
            <div class="spacing"></div>
        </div>
        <!--IMAGE CLIQUABLE-->
        <div class="edit_profil">
            <img class="Image_Profil" src="assets/image/pictogramme_edit.png" onclick="Profil()" alt='pictogramme edit profil' >
                <div id="zone_profil" class="edit_profil-content">
                  <img class="edit_img" src="assets/image/pictogramme_edit.png" alt='pictogramme edit profil'> <!--sera remplacer par des vrai pdp-->
                    <p class="edit_user">Modifie ta photo de profil</p>
                    <p class="edit_user"><?php echo $_SESSION["login"]?></p>
                    <p class="edit_user"><?php echo $_SESSION["prenom"]?></p>
                    <p class="edit_user"><?php echo $_SESSION["promo"]?></p>
                    <div class="spacing"></div>
                    <div class="spacing"></div>
                    <div class="spacing"></div>
                    <a href="#" class="edit">Modifie ton mot de passe<a>
                    <a  href="index_queasy.php?route=Deconnexion" class="edit">Déconnexion<a>
                </div>
        </div>
        <!--ZONE DU PROFIL-->
        <div class="contenue_profil">
                <p class="profil"><?php echo $_SESSION["login"]?></p>
                <p class="profil"><?php echo $_SESSION["prenom"]?></p>
                <p class="profil"><?php echo $_SESSION["promo"]?></p>
        </div>
        <!--ZONE CORRECTION-->
        <div class="wrapper">
            <div class="content">
                <div class="box">
                    <img src="assets/image/Check.png" alt="Pictogramme check">
                    <h2>Correction</h2>
                    <p>Consulter les corrections de vos QUEASY pour apprendre de vos erreurs.</p>
                    <a href='#' class="btn"> voir les corrections ! <i class="fa-regular fa-circle-check"></i></a>
                </div>
        <!--ZONE REJOINDRE-->
                <div class="box">
                    <img src="assets/image/pictogramme_communauty.png" alt="Pictogramme communauty">
                    <h2>Répondre à un QUEASY</h2>
                    <p> Rejoint un QUEASY de ton professeur ou de tes amis.</p>
                    <a href='#' class="btn"> Répondre ! <i class="fa-solid fa-users"></i></a>
                    
                </div>
        <!--ZONE DE RESULTAT-->
                <div class="box">
                    <img src="assets/image/Trophy.png" alt="Pictogramme trophy">
                    <h2>Résultat</h2>
                    <p>Regarder vos scores et le classement de votre QUEASY.</p>
                    <a href='#' class="btn">voir les résultats ! <i class="fa-solid fa-trophy"></i> </a>
                </div>
            </div>
        </div>

        <!--SCRIPT ZONE EDIT USER-->
        <script>
        // Si utilisateur clique sur la photo de profil alors affiche de l'edit menu
        function Profil() {
          document.getElementById("zone_profil").classList.toggle("montrer");
        }
        // Ferme l'edit menu s'il click ailleur que l'image de profil
        window.onclick = function(event) {
          if (!event.target.matches('.Image_Profil')) {
            var edit_profils = document.getElementsByClassName("edit_profil-content"); // On récupere les valeurs se trouvant dans "edit_profil_content"
            var i;
            for (i = 0; i < edit_profils.length; i++) {
              var ouvre_edit_profil = edit_profils[i];
              if (ouvre_edit_profil.classList.contains('montrer')) {
                ouvre_edit_profil.classList.remove('montrer');
              }
            }
          }
        }
        </script>     
    </body>
</html>