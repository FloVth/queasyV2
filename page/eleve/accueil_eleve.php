
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
        <!--ZONE DU PROFIL-->
        <div class="contenue_profil">
                <img class="profil" src="assets/image/pictogramme_edit.png" alt='pictogramme edit profil'>
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
                    <img src="" alt="Pictogramme communauty">
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
    </body>
</html>